<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\Training\Communication\TrainingCommunicationFactory getFactory()
 */
class HelloController extends AbstractController
{
  /**
   * @return array
   */
  public function indexAction()
  {
    $antelopeTransfer = new AntelopeTransfer();
    $antelopeTransfer->setName('Andy');

    $myConfig = $this->getFactory()->getConfig()->getConfigurationKey();

    return $this->viewResponse([
      'antelope' => $antelopeTransfer,
      'config' => $myConfig,
    ]);
  }
}
