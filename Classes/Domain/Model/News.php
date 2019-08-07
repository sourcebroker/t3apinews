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
 *              "path"="/news/news",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_t3apinews_news"}
 *              },
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "path"="/news/news/{id}",
 *              "normalizationContext"={
 *                  "groups"={"api_get_item_t3apinews_news"}
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
class News
    extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $title;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $alternativeTitle;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $teaser;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $bodytext;

    /**
     * @var \DateTime
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $datetime;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $author;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $authorEmail;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SourceBroker\T3apinews\Domain\Model\Category>
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $categories;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SourceBroker\T3apinews\Domain\Model\News>
     * @Serializer\Groups({
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $related;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $type;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $internalurl;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $externalurl;

    /**
     * @var bool
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $istopnews;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SourceBroker\T3apinews\Domain\Model\Tag>
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $tags;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SourceBroker\T3apinews\Domain\Model\FileReference>
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $falMedia;


    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("RecordUri<'tx_t3apinews_news'>")
     */
    public function getSingleUri(): string
    {
        // need to return non null value
        return '';
    }

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("ProcessedImage<'380', '250c'>")
     */
    public function getImageThumbnail(): ?FileReference
    {
        return $this->getFalMedia()->count() ? $this->getFalMedia()->toArray()[0] : null;
    }

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("ProcessedImage<1280, 768>")
     */
    public function getImageLarge(): ?FileReference
    {
        return $this->getFalMedia()->count() ? $this->getFalMedia()->toArray()[0] : null;
    }

}
