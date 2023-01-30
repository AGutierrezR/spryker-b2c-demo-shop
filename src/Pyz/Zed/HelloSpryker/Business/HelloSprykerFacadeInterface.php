<?php

namespace Pyz\Zed\HelloSpryker\Business;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerFacadeInterface
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;

    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;

    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
