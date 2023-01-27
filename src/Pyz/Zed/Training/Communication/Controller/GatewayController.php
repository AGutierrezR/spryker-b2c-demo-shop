<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */

class GatewayController extends AbstractGatewayController
{
    public function getAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria) : AntelopeResponseTransfer
    {
        return $this->getFacade()
            ->getAntelope($antelopeCriteria);
    }

    public function createAntelopeAction(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->getFacade()
            ->createAntelope($antelopeTransfer);
    }
}
