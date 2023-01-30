<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
 */
class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloSprykerTransfer);
    }

    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createStringWriter()
            ->createHelloSprykerEntity($helloSprykerTransfer);
    }

    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->getFactory()
            ->createStringReader()
            ->findHelloSpryker($helloSprykerTransfer);
    }
}
