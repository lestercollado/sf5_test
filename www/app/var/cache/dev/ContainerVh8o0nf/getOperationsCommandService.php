<?php

namespace ContainerVh8o0nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOperationsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\OperationsCommand' shared autowired service.
     *
     * @return \App\Command\OperationsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/OperationsCommand.php';

        $container->privates['App\\Command\\OperationsCommand'] = $instance = new \App\Command\OperationsCommand();

        $instance->setName('app:operations');

        return $instance;
    }
}