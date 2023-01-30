<?php

namespace Pyz\Zed\HelloSpryker\Persistence;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerPersistenceFactory getFactory()
 */
class HelloSprykerRepository extends AbstractRepository implements HelloSprykerRepositoryInterface
{
    public function findPyzHelloSprykerById(int $idHelloSpryker): ?HelloSprykerTransfer
    {
        $helloSprykerEntity = $this->getFactory()
            ->createHelloSprykerQuery()
            ->filterByIdHelloSpryker($idHelloSpryker)
            ->findOne();

        if (!$helloSprykerEntity) {
            return null;
        }

        return (new HelloSprykerTransfer())
            ->fromArray($helloSprykerEntity->toArray(), true);
    }
}
