<?php

namespace ContainerVh8o0nf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2104 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere02e8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties475ff = [
        
    ];

    public function getConnection()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getConnection', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getMetadataFactory', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getExpressionBuilder', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'beginTransaction', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getCache', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getCache();
    }

    public function transactional($func)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'transactional', array('func' => $func), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'wrapInTransaction', array('func' => $func), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'commit', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->commit();
    }

    public function rollback()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'rollback', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getClassMetadata', array('className' => $className), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'createQuery', array('dql' => $dql), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'createNamedQuery', array('name' => $name), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'createQueryBuilder', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'flush', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'clear', array('entityName' => $entityName), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->clear($entityName);
    }

    public function close()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'close', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->close();
    }

    public function persist($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'persist', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'remove', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'refresh', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'detach', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'merge', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getRepository', array('entityName' => $entityName), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'contains', array('entity' => $entity), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getEventManager', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getConfiguration', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'isOpen', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getUnitOfWork', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getProxyFactory', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'initializeObject', array('obj' => $obj), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'getFilters', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'isFiltersStateClean', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'hasFilters', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return $this->valueHolderf2104->hasFilters();
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

        $instance->initializere02e8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2104) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2104 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2104->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__get', ['name' => $name], $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        if (isset(self::$publicProperties475ff[$name])) {
            return $this->valueHolderf2104->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2104;

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

        $targetObject = $this->valueHolderf2104;
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
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2104;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2104;
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
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__isset', array('name' => $name), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2104;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2104;
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
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__unset', array('name' => $name), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2104;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2104;
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
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__clone', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        $this->valueHolderf2104 = clone $this->valueHolderf2104;
    }

    public function __sleep()
    {
        $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, '__sleep', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;

        return array('valueHolderf2104');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere02e8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere02e8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere02e8 && ($this->initializere02e8->__invoke($valueHolderf2104, $this, 'initializeProxy', array(), $this->initializere02e8) || 1) && $this->valueHolderf2104 = $valueHolderf2104;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2104;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2104;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
