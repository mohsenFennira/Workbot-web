<?php

namespace ContainerGTbZEYW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X5zobR6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X5zobR6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X5zobR6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'quizRepository' => 'App\\Repository\\QuizRepository',
        ]);
    }
}