<?php

namespace Pyz\Zed\Training\Communication;

use Pyz\Zed\Training\TrainingConfig;

interface TrainingCommunicationFactoryInterface
{
    public function getConfig(): TrainingConfig;
}
