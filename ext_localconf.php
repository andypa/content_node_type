<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['types'] = array('default');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:content_reset/Configuration/PageTS/modWizards.ts">');
