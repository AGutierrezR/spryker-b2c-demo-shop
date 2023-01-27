<?php

namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Training\TrainingClientInterface;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

class CustomerPageFactory extends SprykerCustomerPageFactory
{
    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_TRAINING);
    }
}
