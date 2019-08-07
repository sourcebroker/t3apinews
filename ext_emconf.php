<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3api sample for news ext',
    'description' => '',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.4-9.5.5',
            'news' => '7.0.0-7.0.999',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
