<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3apinews/Configuration/TsConfig/Page/mod.tsconfig">');

        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['t3api']['serializerMetadataDirs'] = array_merge(
            $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['t3api']['serializerMetadataDirs'] ?? [],
            [
                'GeorgRinger\News' => ExtensionManagementUtility::extPath('t3apinews') . 'Resources/Private/Serializer/GeorgRinger.News',
            ]
        );

    }
);
