<?php

namespace ContainerXSH9LYu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_SendersLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Sender'.\DIRECTORY_SEPARATOR.'SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Sender'.\DIRECTORY_SEPARATOR.'SendersLocator.php';

        return $container->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => 'async'], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => 'async'], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => 'async']], ($container->privates['.service_locator.c7f47p7'] ?? $container->load('get_ServiceLocator_C7f47p7Service')));
    }
}
