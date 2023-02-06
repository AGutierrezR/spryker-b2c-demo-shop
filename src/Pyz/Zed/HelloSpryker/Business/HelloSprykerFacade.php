<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;
use Pyz\Zed\StringReverser\Business\Reverser\StringReverser;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
 */
class HelloSprykerFacade extends AbstractFacade implements HelloSprykerFacadeInterface
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $stringReverserTransfer = $this->getFactory()
            ->createStringReverser()
            ->reverseString((new StringReverserTransfer())->fromArray($helloSprykerTransfer->toArray(), true));

        return $helloSprykerTransfer->fromArray($stringReverserTransfer->toArray(), true);
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
