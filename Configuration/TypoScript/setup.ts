plugin.tx_news_pi1 {
    persistence {
        storagePid = {$plugin.tx_t3apinews.persistence.storagePid}
        recursive = 1
    }
}

config.tx_extbase {
    persistence {
        classes {
            SourceBroker\T3apinews\Domain\Model\News.mapping.tableName = tx_news_domain_model_news
            SourceBroker\T3apinews\Domain\Model\Tag.mapping.tableName = tx_news_domain_model_tag
            SourceBroker\T3apinews\Domain\Model\Category.mapping.tableName = sys_category
            SourceBroker\T3apinews\Domain\Model\FileReference.mapping.tableName = sys_file_reference
        }
    }

    objects {
        GeorgRinger\News\Domain\Model\News.className = SourceBroker\T3apinews\Domain\Model\News
        GeorgRinger\News\Domain\Model\Tag.className = SourceBroker\T3apinews\Domain\Model\Tag
        GeorgRinger\News\Domain\Model\Category.className = SourceBroker\T3apinews\Domain\Model\Category
        GeorgRinger\News\Domain\Model\FileReference.className = SourceBroker\T3apinews\Domain\Model\FileReference
    }
}

config.recordLinks.tx_t3apinews_news {
    typolink {
        parameter = {$plugin.tx_t3apinews.pageUid.newsDetails}
        additionalParams.data = field:uid
        additionalParams.wrap = &tx_news_pi1[controller]=News&tx_news_pi1[action]=detail&tx_news_pi1[news]=|
        useCacheHash = 1
    }
}
