<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3apinews', 'Configuration/TypoScript', 'T3api sample for news ext');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3apinews/Configuration/TsConfig/Page/mod.tsconfig">');

