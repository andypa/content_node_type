<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


$GLOBALS['TCA']['tt_content']['ctrl']['formattedLabel_userFunc'] = \SimpleTYPO3\ContentNodeType\Hooks\Labels::class . '->propertiesBasedTitle';

$GLOBALS['TCA']['tt_content']['ctrl']['label_userFunc'] = \SimpleTYPO3\ContentNodeType\Hooks\Labels::class . '->propertiesBasedTitle';


$GLOBALS['TCA']['tt_content']['types']['list']['showitem'] = '
        --div--;Properties,
                list_type;LLL:EXT:cms/locallang_ttc.xlf:list_type_formlabel,
                select_key;LLL:EXT:cms/locallang_ttc.xlf:select_key_formlabel,
                pages;LLL:EXT:cms/locallang_ttc.xlf:pages.ALT.list_formlabel,
                recursive,
        --div--;Common Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
        --div--;Content Node Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
		        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,rowDescription,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended
';



$GLOBALS['TCA']['tt_content']['types']['fluidcontent_content']['showitem'] = '
        --div--;Properties,
                pi_flexform,
        --div--;Common Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
        --div--;Content Node Properties,
               --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
		        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,rowDescription,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended
';