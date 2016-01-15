<?php

namespace SimpleTYPO3\ContentNodeType\Hooks;


use FluidTYPO3\FluidcontentCore\Controller\CoreContentController;
use FluidTYPO3\Flux\Utility\RecursiveArrayUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class Labels extends CoreContentController
{


    /**
     * @return void
     */
    protected function initializeViewVariables($row)
    {
        $objectManager = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
        $this->provider = $objectManager->get('FluidTYPO3\FluidcontentCore\Provider\CoreContentProvider');
        $this->configurationService = $objectManager->get('FluidTYPO3\Flux\Service\FluxService');
        $form = $this->provider->getForm($row);
        $generalSettings = $this->configurationService->convertFlexFormContentToArray($row['pi_flexform'], $form);
        $contentSettings = $this->configurationService->convertFlexFormContentToArray($row['content_options'], $form);
        $this->settings = RecursiveArrayUtility::merge($this->settings, $generalSettings, false, false);
        if (false === isset($this->settings['content'])) {
            $this->settings['content'] = $contentSettings;
        } else {
            $this->settings['content'] = RecursiveArrayUtility::merge($this->settings['content'], $contentSettings);
        }
    }

    function propertiesBasedTitle(&$parameters, $parentObject)
    {
        $record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        if (false === is_null($record)) {
            $this->initializeViewVariables($record);
            $pop = $record['header'];
			$parameters['title'] = json_encode($this->settings);// $type.'[Uid: '.$record['uid'].'] '.(empty($pop) ? ' ->' : '').$pop;
        }
    }
}
