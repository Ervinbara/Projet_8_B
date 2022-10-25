<?php

namespace ContainerH1NmExV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Messenger_HandlersLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.messenger.handlers_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlersLocator.php';

        return $container->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.tGvt0LH'] ?? $container->load('get_Messenger_HandlerDescriptor_TGvt0LHService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.vMw0m61'] ?? $container->load('get_Messenger_HandlerDescriptor_VMw0m61Service'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.XZowc.T'] ?? $container->load('get_Messenger_HandlerDescriptor_XZowc_TService'));
        }, 1), 'Symfony\\Component\\Notifier\\Message\\PushMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Lml2ICs'] ?? $container->load('get_Messenger_HandlerDescriptor_Lml2ICsService'));
        }, 1)]);
    }
}
