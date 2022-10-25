<?php

namespace ContainerK68xDMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Csrf_TokenGeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.csrf.token_generator' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-csrf'.\DIRECTORY_SEPARATOR.'TokenGenerator'.\DIRECTORY_SEPARATOR.'UriSafeTokenGenerator.php';

        return $container->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator();
    }
}
