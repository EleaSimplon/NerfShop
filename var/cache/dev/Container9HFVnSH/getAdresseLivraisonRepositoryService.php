<?php

namespace Container9HFVnSH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdresseLivraisonRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AdresseLivraisonRepository' shared autowired service.
     *
     * @return \App\Repository\AdresseLivraisonRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/AdresseLivraisonRepository.php';

        return $container->privates['App\\Repository\\AdresseLivraisonRepository'] = new \App\Repository\AdresseLivraisonRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
