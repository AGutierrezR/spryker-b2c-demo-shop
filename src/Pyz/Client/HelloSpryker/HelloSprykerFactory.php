<?php

namespace Pyz\Client\HelloSpryker;

use Pyz\Client\HelloSpryker\Stub\HelloSprykerStub;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class HelloSprykerFactory extends AbstractFactory
{
    public function createHelloSprykerStub(): HelloSprykerStub
    {
        return new HelloSprykerStub($this->getZedRequestClient());
    }

    public function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
