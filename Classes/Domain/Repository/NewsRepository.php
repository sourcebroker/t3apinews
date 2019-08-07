<?php

namespace SourceBroker\T3apinews\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

class NewsRepository
    extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    public function findAllWithLimit(int $limit): QueryResultInterface
    {
        return $this->createQuery()->setLimit($limit)->execute();
    }

}
