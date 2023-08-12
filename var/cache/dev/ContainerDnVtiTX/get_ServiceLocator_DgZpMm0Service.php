<?php

namespace ContainerDnVtiTX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DgZpMm0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dgZpMm0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dgZpMm0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EventController::delete' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\EventController::edit' => ['privates', '.service_locator.c_V__l3', 'get_ServiceLocator_CVL3Service', true],
            'App\\Controller\\EventController::index' => ['privates', '.service_locator.37hY7K.', 'get_ServiceLocator_37hY7K_Service', true],
            'App\\Controller\\EventController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\EventController::show' => ['privates', '.service_locator.89sRwg8', 'get_ServiceLocator_89sRwg8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\EventController:delete' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\EventController:edit' => ['privates', '.service_locator.c_V__l3', 'get_ServiceLocator_CVL3Service', true],
            'App\\Controller\\EventController:index' => ['privates', '.service_locator.37hY7K.', 'get_ServiceLocator_37hY7K_Service', true],
            'App\\Controller\\EventController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\EventController:show' => ['privates', '.service_locator.89sRwg8', 'get_ServiceLocator_89sRwg8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\EventController::delete' => '?',
            'App\\Controller\\EventController::edit' => '?',
            'App\\Controller\\EventController::index' => '?',
            'App\\Controller\\EventController::new' => '?',
            'App\\Controller\\EventController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EventController:delete' => '?',
            'App\\Controller\\EventController:edit' => '?',
            'App\\Controller\\EventController:index' => '?',
            'App\\Controller\\EventController:new' => '?',
            'App\\Controller\\EventController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}