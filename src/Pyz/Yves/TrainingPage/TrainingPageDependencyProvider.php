<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\TrainingPage;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class TrainingPageDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_TRAINING = 'CLIENT_TRAINING';
    public const CLIENT_STORE = 'CLIENT_STORE';

    public function provideDependencies(Container $container)
    {
        $container = $this->addTrainingClient($container);
        $container = $this->addStoreClient($container);

        return $container;
    }

    protected function addTrainingClient(Container $container)
    {
        $container->set(static::CLIENT_TRAINING, function (Container $container) {
            return $container->getLocator()->training()->client();
        });

        return $container;
    }

    protected function addStoreClient(Container $container)
    {
        $container->set(static::CLIENT_STORE, function (Container $container) {
            return $container->getLocator()->store()->client();
        });

        return $container;
    }
}
