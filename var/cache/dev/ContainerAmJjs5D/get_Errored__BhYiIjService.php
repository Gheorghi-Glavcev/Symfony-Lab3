<?php

namespace ContainerAmJjs5D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored__BhYiIjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..bhYiIj' shared service.
     *
     * @return \App\Controller\GreetingGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\logController::index()": the $generator argument is type-hinted with the non-existent class or interface: "App\\Controller\\GreetingGenerator". Did you forget to add a use statement?');
    }
}