<?php

namespace ContainerVh8o0nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZSkfWeIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zSkfWeI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zSkfWeI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serv' => ['privates', 'App\\Service\\OperationsService', 'getOperationsServiceService', true],
        ], [
            'serv' => 'App\\Service\\OperationsService',
        ]);
    }
}