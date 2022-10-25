<?php

namespace ContainerK68xDMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Session_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.session.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\SessionLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SessionLogoutListener.php';

        return $container->privates['security.logout.listener.session.main'] = new \Symfony\Component\Security\Http\EventListener\SessionLogoutListener();
    }
}
