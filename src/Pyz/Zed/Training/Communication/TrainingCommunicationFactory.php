<?php

namespace Pyz\Zed\Training\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Pyz\Zed\Training\TrainingConfig;

class TrainingCommunicationFactory extends AbstractCommunicationFactory implements TrainingCommunicationFactoryInterface
{
    public function getConfig(): TrainingConfig
    {
        return $this->createTrainingConfig();
    }

    protected function createTrainingConfig(): TrainingConfig
    {
        return new TrainingConfig();
    }
}
