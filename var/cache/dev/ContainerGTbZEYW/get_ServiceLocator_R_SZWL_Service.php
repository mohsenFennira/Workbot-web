<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R_SZWL_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r.sZWL.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r.sZWL.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participation' => ['privates', '.errored..service_locator.r.sZWL..App\\Entity\\Participation', NULL, 'Cannot autowire service ".service_locator.r.sZWL.": it references class "App\\Entity\\Participation" but no such service exists.'],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
        ], [
            'participation' => 'App\\Entity\\Participation',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
        ]);
    }
}