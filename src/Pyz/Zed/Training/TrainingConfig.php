<?php

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
