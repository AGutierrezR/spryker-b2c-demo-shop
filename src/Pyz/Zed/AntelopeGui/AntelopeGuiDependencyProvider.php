<?php

namespace Pyz\Zed\AntelopeGui;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class AntelopeGuiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const PROPEL_QUERY_ANTELOPE = 'PROPEL_QUERY_ANTELOPE';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);

        $container = $this->addAntelopePropelQuery($container);

        return $container;
    }

    protected function addAntelopePropelQuery(Container $container): Container
    {
        $container->set(static::PROPEL_QUERY_ANTELOPE, $container->factory(function () {
            return PyzAntelopeQuery::create();
        }));

        return $container;
    }
}
