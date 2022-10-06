<?php

namespace ContainerZea9Rdg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1ffbb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer02705 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa0045 = [
        
    ];

    public function getConnection()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getConnection', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getMetadataFactory', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getExpressionBuilder', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'beginTransaction', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getCache', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'transactional', array('func' => $func), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'commit', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->commit();
    }

    public function rollback()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'rollback', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getClassMetadata', array('className' => $className), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'createQuery', array('dql' => $dql), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'createNamedQuery', array('name' => $name), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'createQueryBuilder', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'flush', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'clear', array('entityName' => $entityName), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->clear($entityName);
    }

    public function close()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'close', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->close();
    }

    public function persist($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'persist', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'remove', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'refresh', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'detach', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'merge', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'contains', array('entity' => $entity), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getEventManager', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getConfiguration', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'isOpen', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getUnitOfWork', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getProxyFactory', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'initializeObject', array('obj' => $obj), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'getFilters', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'isFiltersStateClean', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'hasFilters', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return $this->valueHolder1ffbb->hasFilters();
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

        $instance->initializer02705 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1ffbb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ffbb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1ffbb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__get', ['name' => $name], $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        if (isset(self::$publicPropertiesa0045[$name])) {
            return $this->valueHolder1ffbb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffbb;

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

        $targetObject = $this->valueHolder1ffbb;
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
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffbb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1ffbb;
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
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__isset', array('name' => $name), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffbb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1ffbb;
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
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__unset', array('name' => $name), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ffbb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1ffbb;
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
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__clone', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        $this->valueHolder1ffbb = clone $this->valueHolder1ffbb;
    }

    public function __sleep()
    {
        $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, '__sleep', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;

        return array('valueHolder1ffbb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer02705 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer02705;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer02705 && ($this->initializer02705->__invoke($valueHolder1ffbb, $this, 'initializeProxy', array(), $this->initializer02705) || 1) && $this->valueHolder1ffbb = $valueHolder1ffbb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ffbb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ffbb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
