<?php

namespace Ins\RestifyNews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;
use SourceBroker\Restify\Annotation as Restify;
use SourceBroker\Restify\Filter\SearchFilter;
use SourceBroker\Restify\Filter\OrderFilter;
use SourceBroker\Restify\Filter\NumericFilter;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * @Restify\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "path"="/news/category",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_restifynews_category"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/fileref/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_restifynews_category"}
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
class Category
    extends \GeorgRinger\News\Domain\Model\Category
{

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_restifynews_category",
     *     "api_get_item_restifynews_category",
     *     "api_get_collection_restifynews_news",
     *     "api_get_item_restifynews_news",
     * })
     */
    protected $title;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_item_restifynews_category",
     *     "api_get_item_restifynews_news",
     * })
     */
    protected $description;

    /**
     * @var \Ins\RestifyNews\Domain\Model\Category
     * @Serializer\Groups({
     *     "api_get_collection_restifynews_category",
     *     "api_get_item_restifynews_category",
     * })
     */
    protected $parentcategory;

    /**
     * @var int
     * @Serializer\Groups({
     *     "api_get_collection_restifynews_category",
     *     "api_get_item_restifynews_category",
     * })
     */
    protected $shortcut;

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_restifynews_category",
     *     "api_get_item_restifynews_category",
     *     "api_get_collection_restifynews_news",
     *     "api_get_item_restifynews_news",
     * })
     * @Serializer\Type("ProcessedImage<'640', '380'>")
     */
    public function getImage(): ?FileReference
    {
        return $this->getImages()->count() ? $this->getImages()->toArray()[0] : null;
    }

}
