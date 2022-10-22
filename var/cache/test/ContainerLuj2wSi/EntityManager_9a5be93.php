<?php

namespace ContainerLuj2wSi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1d46d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8436d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9fb6a = [
        
    ];

    public function getConnection()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getConnection', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getMetadataFactory', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getExpressionBuilder', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'beginTransaction', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getCache', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'transactional', array('func' => $func), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'commit', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->commit();
    }

    public function rollback()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'rollback', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getClassMetadata', array('className' => $className), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'createQuery', array('dql' => $dql), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'createNamedQuery', array('name' => $name), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'createQueryBuilder', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'flush', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'clear', array('entityName' => $entityName), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->clear($entityName);
    }

    public function close()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'close', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->close();
    }

    public function persist($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'persist', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'remove', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'refresh', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'detach', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'merge', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'contains', array('entity' => $entity), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getEventManager', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getConfiguration', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'isOpen', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getUnitOfWork', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getProxyFactory', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'initializeObject', array('obj' => $obj), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'getFilters', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'isFiltersStateClean', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'hasFilters', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return $this->valueHolder1d46d->hasFilters();
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

        $instance->initializer8436d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1d46d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d46d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1d46d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__get', ['name' => $name], $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        if (isset(self::$publicProperties9fb6a[$name])) {
            return $this->valueHolder1d46d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d46d;

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

        $targetObject = $this->valueHolder1d46d;
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
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d46d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1d46d;
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
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__isset', array('name' => $name), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d46d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1d46d;
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
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__unset', array('name' => $name), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d46d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1d46d;
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
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__clone', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        $this->valueHolder1d46d = clone $this->valueHolder1d46d;
    }

    public function __sleep()
    {
        $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, '__sleep', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;

        return array('valueHolder1d46d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8436d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8436d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8436d && ($this->initializer8436d->__invoke($valueHolder1d46d, $this, 'initializeProxy', array(), $this->initializer8436d) || 1) && $this->valueHolder1d46d = $valueHolder1d46d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d46d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d46d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
