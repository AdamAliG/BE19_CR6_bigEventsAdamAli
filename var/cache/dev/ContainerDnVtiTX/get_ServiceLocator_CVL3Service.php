<?php

namespace ContainerDnVtiTX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVL3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c_V__l3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c_V__l3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'event' => ['privates', '.errored..service_locator.c_V__l3.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.c_V__l3": it references class "App\\Entity\\Event" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'event' => 'App\\Entity\\Event',
        ]);
    }
}
