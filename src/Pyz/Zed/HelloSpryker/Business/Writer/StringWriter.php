<?php

namespace Pyz\Zed\HelloSpryker\Business\Writer;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface;

class StringWriter
{
    /**
     * @var \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface
     */
    protected $helloSprykerEntityManager;

    public function __construct(HelloSprykerEntityManagerInterface $helloSprykerEntityManager)
    {
        $this->helloSprykerEntityManager = $helloSprykerEntityManager;
    }

    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        return $this->helloSprykerEntityManager->saveHelloSprykerEntity($helloSprykerTransfer);
    }
}
