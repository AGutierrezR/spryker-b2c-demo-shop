<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use \Spryker\Yves\Kernel\View\View;

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
        return $this->view(
            [],
            [],
            '@PersonalizedProduct/views/index/index.twig'
        );
    }
}
