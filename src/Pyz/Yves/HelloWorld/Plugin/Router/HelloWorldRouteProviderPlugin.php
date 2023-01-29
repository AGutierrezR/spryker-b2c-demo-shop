<?php

namespace Pyz\Yves\HelloWorld\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloWorldRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_HELLO_WORLD_INDEX = 'hello-world-index';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addHelloWorldRoute($routeCollection);

        return $routeCollection;
    }

    private function addHelloWorldRoute(RouteCollection $routeCollection): RouteCollection
    {
        // $route = $this->buildRoute('hello-world', 'HelloWorld', 'Index', 'indexAction');
        $route = $this->buildRoute('/hello-world', 'HelloWorld', 'Index', 'indexAction');
        $routeCollection->add(static::ROUTE_HELLO_WORLD_INDEX, $route);

        return $routeCollection;
    }
}
