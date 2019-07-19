plugin.tx_news_pi1 {
    persistence {
        storagePid = {$plugin.tx_restifynews.persistence.storagePid}
        recursive = 1
    }
}

config.tx_extbase {
    persistence {
        classes {
            Ins\RestifyNews\Domain\Model\News.mapping.tableName = tx_news_domain_model_news
            Ins\RestifyNews\Domain\Model\Tag.mapping.tableName = tx_news_domain_model_tag
            Ins\RestifyNews\Domain\Model\Category.mapping.tableName = sys_category
            Ins\RestifyNews\Domain\Model\FileReference.mapping.tableName = sys_file_reference
        }
    }

    objects {
        GeorgRinger\News\Domain\Model\News.className = Ins\RestifyNews\Domain\Model\News
        GeorgRinger\News\Domain\Model\Tag.className = Ins\RestifyNews\Domain\Model\Tag
        GeorgRinger\News\Domain\Model\Category.className = Ins\RestifyNews\Domain\Model\Category
        GeorgRinger\News\Domain\Model\FileReference.className = Ins\RestifyNews\Domain\Model\FileReference
    }
}

config.recordLinks.tx_restifynews_news {
    typolink {
        parameter = {$plugin.tx_restifynews.pageUid.newsDetails}
        additionalParams.data = field:uid
        additionalParams.wrap = &tx_news_pi1[controller]=News&tx_news_pi1[action]=detail&tx_news_pi1[news]=|
        useCacheHash = 1
    }
}
