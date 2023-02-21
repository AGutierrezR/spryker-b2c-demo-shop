<?php

namespace Pyz\Zed\AntelopeGui\Communication;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\AntelopeGui\AntelopeGuiDependencyProvider;
use Pyz\Zed\AntelopeGui\Communication\Table\AntelopeTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class AntelopeGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createAntelopeTable()
    {
        return new AntelopeTable(
            $this->getAntelopePropelQuery()
        );
    }

    public function getAntelopePropelQuery(): PyzAntelopeQuery
    {
        return $this->getProvidedDependency(AntelopeGuiDependencyProvider::PROPEL_QUERY_ANTELOPE);
    }
}
