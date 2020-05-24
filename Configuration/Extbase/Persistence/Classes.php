<?php

declare(strict_types=1);

return [
    \SourceBroker\T3apinews\Domain\Model\News::class => [
        'tableName' => 'tx_news_domain_model_news',
    ],
    \SourceBroker\T3apinews\Domain\Model\Tag::class => [
        'tableName' => 'tx_news_domain_model_tag',
    ],
    \SourceBroker\T3apinews\Domain\Model\FileReference::class => [
        'tableName' => 'sys_file_reference',
    ],
    \SourceBroker\T3apinews\Domain\Model\Category::class => [
        'tableName' => 'sys_category',
    ],
];
