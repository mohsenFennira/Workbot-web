<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UeiYoRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uei_YoR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uei_YoR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ad' => ['privates', '.errored..service_locator.uei_YoR.App\\Entity\\Ads', NULL, 'Cannot autowire service ".service_locator.uei_YoR": it references class "App\\Entity\\Ads" but no such service exists.'],
        ], [
            'ad' => 'App\\Entity\\Ads',
        ]);
    }
}