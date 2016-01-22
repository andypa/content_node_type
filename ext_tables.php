<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Content Node Type');
if ('BE' === TYPO3_MODE) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:content_node_type/Configuration/TypoScript/setup.txt">');
}


$columns = [
	'hidden',
];
foreach ($columns as $column) {
	$GLOBALS['TCA']['tt_content']['columns'][$column]['config']['renderType'] = 'bootstrapSwitchElement';
	$GLOBALS['TCA']['tt_content']['columns'][$column]['config']['type'] = 'input';
	unset($GLOBALS['TCA']['tt_content']['columns'][$column]['config']['items']);
}
