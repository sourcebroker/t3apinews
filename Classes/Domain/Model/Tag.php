<?php

namespace SourceBroker\T3apinews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;
use SourceBroker\T3api\Annotation as T3api;
use SourceBroker\T3api\Filter\OrderFilter;

/**
 * @T3api\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "path"="/news/tag",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_t3apinews_tag"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/tag/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_t3apinews_tag"}
 *              },
 *          }
 *     },
 *     attributes={
 *          "pagination_client_items_per_page"=1,
 *          "maximum_items_per_page"=30,
 *     }
 * )
 *
 * @T3api\ApiFilter(
 *     OrderFilter::class,
 *     properties={"uid","title"}
 * )
 */
class Tag
    extends \GeorgRinger\News\Domain\Model\Tag
{

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_tag",
     *     "api_get_item_t3apinews_tag",
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $title;

}
