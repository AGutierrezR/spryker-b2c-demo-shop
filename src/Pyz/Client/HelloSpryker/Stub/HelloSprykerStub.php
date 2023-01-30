<?php

namespace Pyz\Client\HelloSpryker\Stub;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class HelloSprykerStub extends ZedRequestStub
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        // We will update this method later with corresponding code.

        /** @var \Generated\Shared\Transfer\HelloSprykerTransfer $helloSprykerTransfer */
        $helloSprykerTransfer = $this->zedStub->call('/hello-spryker/gateway/reverse-string', $helloSprykerTransfer);

        return $helloSprykerTransfer;
    }
}
