<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X7N9BY7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X7N9BY7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X7N9BY7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'certification' => ['privates', '.errored..service_locator.X7N9BY7.App\\Entity\\Certification', NULL, 'Cannot autowire service ".service_locator.X7N9BY7": it references class "App\\Entity\\Certification" but no such service exists.'],
            'certificationRepository' => ['privates', 'App\\Repository\\CertificationRepository', 'getCertificationRepositoryService', true],
        ], [
            'certification' => 'App\\Entity\\Certification',
            'certificationRepository' => 'App\\Repository\\CertificationRepository',
        ]);
    }
}