<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Pyz\Zed\HelloSpryker\Business\Reader\StringReader;
use Pyz\Zed\HelloSpryker\Business\Writer\StringWriter;
use Pyz\Zed\HelloSpryker\HelloSprykerDependencyProvider;
use Pyz\Zed\StringReverser\Business\StringReverserFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
 */
class HelloSprykerBusinessFactory extends AbstractBusinessFactory
{
    public function createStringReverser(): StringReverserFacadeInterface
    {
        return $this->getStringReverserFacade();
    }

    public function createStringReader()
    {
        return new StringReader($this->getRepository());
    }

    public function createStringWriter()
    {
        return new StringWriter($this->getEntityManager());
    }

    protected function getStringReverserFacade(): StringReverserFacadeInterface
    {
        return $this->getProvidedDependency(HelloSprykerDependencyProvider::FACADE_STRING_REVERSER);
    }
}
