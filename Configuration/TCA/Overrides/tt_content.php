<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

//$GLOBALS['TCA']['tt_content']['ctrl']['formattedLabel_userFunc'] = \SimpleTYPO3\ContentNodeType\Hooks\Labels::class . '->propertiesBasedTitle';
//
//$GLOBALS['TCA']['tt_content']['ctrl']['label_userFunc'] = \SimpleTYPO3\ContentNodeType\Hooks\Labels::class . '->propertiesBasedTitle';

$common = '
        --div--;Common Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
        --div--;Content Node Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
		        --palette--;Content element Key;headers,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended
        ';

$GLOBALS['TCA']['tt_content']['types']['list']['showitem'] = '
        --div--;Properties,
                list_type;LLL:EXT:cms/locallang_ttc.xlf:list_type_formlabel,
                select_key;LLL:EXT:cms/locallang_ttc.xlf:select_key_formlabel,
                pages;LLL:EXT:cms/locallang_ttc.xlf:pages.ALT.list_formlabel,
                recursive,
'.$common;


$GLOBALS['TCA']['tt_content']['types']['fluidcontent_content']['showitem'] = '
        --div--;Properties,
                pi_flexform,
'.$common;


$GLOBALS['TCA']['tt_content']['types']['header']['showitem'] = '
		--div--;Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.headers;headers,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['text']['showitem'] = '
		--div--;Properties,
                bodytext;LLL:EXT:cms/locallang_ttc.xlf:bodytext_formlabel;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
                rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['image']['showitem'] = '
		--div--;Properties,
                image,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imagelinks;imagelinks,

'.$common;

$GLOBALS['TCA']['tt_content']['types']['bullets']['showitem'] = '
		--div--;Properties,
                bodytext;LLL:EXT:cms/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel;;nowrap,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['table']['showitem'] = '
		--div--;Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.table_layout;tablelayout,
                layout;;10,
                cols,
                bodytext;;9;nowrap:wizards[table],
                pi_flexform,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['uploads']['showitem'] = '
		--div--;Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:media;uploads,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.uploads_layout;uploadslayout,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['menu']['showitem'] = '
		--div--;Properties,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.menu;menu,
                --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['shortcut']['showitem'] = '
		--div--;Properties,
                header;LLL:EXT:cms/locallang_ttc.xlf:header.ALT.shortcut_formlabel,
                records;LLL:EXT:cms/locallang_ttc.xlf:records_formlabel,
'.$common;


$GLOBALS['TCA']['tt_content']['types']['div']['showitem'] = '
		--div--;Properties,
                header;LLL:EXT:cms/locallang_ttc.xlf:header.ALT.div_formlabel,
'.$common;

$GLOBALS['TCA']['tt_content']['types']['html']['showitem'] = '
		--div--;Properties,
                header;LLL:EXT:cms/locallang_ttc.xlf:header.ALT.html_formlabel,
                bodytext,
'.$common;
