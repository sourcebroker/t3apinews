<?php

namespace SourceBroker\T3apinews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;
use SourceBroker\T3api\Annotation as T3api;
use SourceBroker\T3api\Filter\SearchFilter;
use SourceBroker\T3api\Filter\OrderFilter;
use SourceBroker\T3api\Filter\NumericFilter;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * @T3api\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "path"="/news/category",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_t3apinews_category"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/fileref/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_t3apinews_category"}
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
class Category
    extends \GeorgRinger\News\Domain\Model\Category
{

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_category",
     *     "api_get_item_t3apinews_category",
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $title;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_item_t3apinews_category",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $description;

    /**
     * @var \SourceBroker\T3apinews\Domain\Model\Category
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_category",
     *     "api_get_item_t3apinews_category",
     * })
     */
    protected $parentcategory;

    /**
     * @var int
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_category",
     *     "api_get_item_t3apinews_category",
     * })
     */
    protected $shortcut;

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_category",
     *     "api_get_item_t3apinews_category",
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("ProcessedImage<'640', '380'>")
     */
    public function getImage(): ?FileReference
    {
        return $this->getImages()->count() ? $this->getImages()->toArray()[0] : null;
    }

}
