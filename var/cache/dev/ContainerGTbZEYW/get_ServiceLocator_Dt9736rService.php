<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dt9736rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dt9736r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dt9736r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entretien' => ['privates', '.errored..service_locator.dt9736r.App\\Entity\\Entretien', NULL, 'Cannot autowire service ".service_locator.dt9736r": it references class "App\\Entity\\Entretien" but no such service exists.'],
        ], [
            'entretien' => 'App\\Entity\\Entretien',
        ]);
    }
}