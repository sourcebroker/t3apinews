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
    'version' => '0.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.999',
            'news' => '7.0.0-8.99.999',
            't3api' => '1.0.0-2.99.999',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
