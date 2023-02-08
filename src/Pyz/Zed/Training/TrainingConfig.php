<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training;

use Pyz\Shared\Training\TrainingConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class TrainingConfig extends AbstractBundleConfig
{
    public function getConfigurationKey()
    {
        return $this->get(TrainingConstants::CONFIGURATION_KEY);
    }
}
