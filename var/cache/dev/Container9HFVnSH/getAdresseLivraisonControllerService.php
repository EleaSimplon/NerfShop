<?php

namespace Container9HFVnSH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdresseLivraisonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdresseLivraisonController' shared autowired service.
     *
     * @return \App\Controller\AdresseLivraisonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdresseLivraisonController.php';

        $container->services['App\\Controller\\AdresseLivraisonController'] = $instance = new \App\Controller\AdresseLivraisonController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\AdresseLivraisonController', $container));

        return $instance;
    }
}
