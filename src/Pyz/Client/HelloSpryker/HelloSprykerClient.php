<?php

namespace Pyz\Client\HelloSpryker;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerFactory getFactory()
 */
class HelloSprykerClient extends AbstractClient implements HelloSprykerClientInterface
{
  public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
  {
    return $this->getFactory()
      ->createHelloSprykerStub()
      ->reverseString($helloSprykerTransfer);
  }
}
