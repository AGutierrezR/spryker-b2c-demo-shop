<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Training\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \Pyz\Zed\Training\TrainingConfig getConfig()
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 * @method \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface getRepository()
 * @method \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface getEntityManager()
 */
class TrainingCommunicationFactory extends AbstractCommunicationFactory
{
}
