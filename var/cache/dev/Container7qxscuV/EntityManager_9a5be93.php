<?php

namespace Container7qxscuV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercbb02 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd7cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25375 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getConnection', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getMetadataFactory', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getExpressionBuilder', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'beginTransaction', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getCache', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'transactional', array('func' => $func), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->transactional($func);
    }

    public function commit()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'commit', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->commit();
    }

    public function rollback()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'rollback', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'createQuery', array('dql' => $dql), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'createQueryBuilder', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'flush', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'clear', array('entityName' => $entityName), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'close', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->close();
    }

    public function persist($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'persist', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'remove', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'refresh', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'detach', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'merge', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'contains', array('entity' => $entity), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getEventManager', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getConfiguration', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'isOpen', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getUnitOfWork', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getProxyFactory', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'getFilters', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'isFiltersStateClean', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'hasFilters', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return $this->valueHoldercbb02->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerdd7cb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercbb02) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercbb02 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercbb02->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__get', ['name' => $name], $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        if (isset(self::$publicProperties25375[$name])) {
            return $this->valueHoldercbb02->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbb02;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbb02;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbb02;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbb02;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__isset', array('name' => $name), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbb02;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercbb02;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__unset', array('name' => $name), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbb02;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercbb02;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__clone', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        $this->valueHoldercbb02 = clone $this->valueHoldercbb02;
    }

    public function __sleep()
    {
        $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, '__sleep', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;

        return array('valueHoldercbb02');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd7cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd7cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd7cb && ($this->initializerdd7cb->__invoke($valueHoldercbb02, $this, 'initializeProxy', array(), $this->initializerdd7cb) || 1) && $this->valueHoldercbb02 = $valueHoldercbb02;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercbb02;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercbb02;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
