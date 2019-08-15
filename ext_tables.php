<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die('Access denied.');

ExtensionManagementUtility::addStaticFile('t3apinews', 'Configuration/TypoScript', 'T3api sample for news ext');
