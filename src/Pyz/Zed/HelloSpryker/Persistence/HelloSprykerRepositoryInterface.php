<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface HelloSprykerRepositoryInterface
{
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer;
}
