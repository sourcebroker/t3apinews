<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('restifynews', 'Configuration/TypoScript', 'Restify sample for news ext');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:restifynews/Configuration/TsConfig/Page/mod.tsconfig">');

