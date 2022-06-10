<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3api sample for news ext',
    'description' => '',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.999',
            'news' => '8.0.0-9.99.999',
            't3api' => '1.0.0-2.99.999',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
