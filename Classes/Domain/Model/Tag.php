<?php

namespace Ins\RestifyNews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;
use SourceBroker\Restify\Annotation as Restify;
use SourceBroker\Restify\Filter\OrderFilter;

/**
 * @Restify\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "path"="/news/tag",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_restifynews_tag"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/tag/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_restifynews_tag"}
 *              },
 *          }
 *     },
 *     attributes={
 *          "pagination_client_items_per_page"=1,
 *          "maximum_items_per_page"=30,
 *     }
 * )
 *
 * @Restify\ApiFilter(
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
     *     "api_get_collection_restifynews_tag",
     *     "api_get_item_restifynews_tag",
     *     "api_get_collection_restifynews_news",
     *     "api_get_item_restifynews_news",
     * })
     */
    protected $title;

}
