<?php

namespace ContainerRbLB6pX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder80552 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd72c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescf897 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getConnection', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getMetadataFactory', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getExpressionBuilder', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'beginTransaction', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getCache', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'transactional', array('func' => $func), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'commit', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->commit();
    }

    public function rollback()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'rollback', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'createQuery', array('dql' => $dql), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'createQueryBuilder', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'flush', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'clear', array('entityName' => $entityName), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'close', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->close();
    }

    public function persist($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'persist', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'remove', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'refresh', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'detach', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'merge', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'contains', array('entity' => $entity), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getEventManager', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getConfiguration', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'isOpen', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getUnitOfWork', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getProxyFactory', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'getFilters', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'isFiltersStateClean', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'hasFilters', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return $this->valueHolder80552->hasFilters();
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

        $instance->initializerdd72c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder80552) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder80552 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder80552->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__get', ['name' => $name], $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        if (isset(self::$publicPropertiescf897[$name])) {
            return $this->valueHolder80552->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80552;

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

        $targetObject = $this->valueHolder80552;
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
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80552;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder80552;
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
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__isset', array('name' => $name), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80552;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder80552;
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
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__unset', array('name' => $name), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80552;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder80552;
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
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__clone', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        $this->valueHolder80552 = clone $this->valueHolder80552;
    }

    public function __sleep()
    {
        $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, '__sleep', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;

        return array('valueHolder80552');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd72c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd72c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd72c && ($this->initializerdd72c->__invoke($valueHolder80552, $this, 'initializeProxy', array(), $this->initializerdd72c) || 1) && $this->valueHolder80552 = $valueHolder80552;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder80552;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder80552;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
