<?php

namespace SourceBroker\T3apinews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;
use SourceBroker\T3api\Annotation as T3api;
use SourceBroker\T3api\Filter\OrderFilter;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * @T3api\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "path"="/news/categories",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_t3apinews_category"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/categories/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_t3apinews_category"}
 *              },
 *          }
 *     },
 * )
 *
 * @T3api\ApiFilter(
 *     OrderFilter::class,
 *     properties={"uid","title"}
 * )
 */
class Category extends \GeorgRinger\News\Domain\Model\Category
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
