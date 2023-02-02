<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use \Spryker\Yves\Kernel\View\View;

/**
 * @method \Pyz\Client\PersonalizedProduct\PersonalizedProductClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param int $limit
     *
     * @return View
     *
     */
    public function indexAction(int $limit): View
    {
        $searchResult = $this->getClient()->getPersonalizedProducts($limit);

        return $this->view(
            $searchResult,
            [],
            '@PersonalizedProduct/views/index/index.twig'
        );
    }
}
