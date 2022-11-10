<?php

namespace ContainerJTWYLFQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CgQzjRyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CgQzjRy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CgQzjRy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'test' => ['privates', '.errored..service_locator.CgQzjRy.App\\Entity\\Test', NULL, 'Cannot autowire service ".service_locator.CgQzjRy": it references class "App\\Entity\\Test" but no such service exists.'],
        ], [
            'test' => 'App\\Entity\\Test',
        ]);
    }
}