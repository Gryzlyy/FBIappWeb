<?php

namespace ContainerYeDyDBp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder19f6b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere717e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1949 = [
        
    ];

    public function getConnection()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getConnection', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getMetadataFactory', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getExpressionBuilder', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'beginTransaction', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getCache', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'transactional', array('func' => $func), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->transactional($func);
    }

    public function commit()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'commit', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->commit();
    }

    public function rollback()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'rollback', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getClassMetadata', array('className' => $className), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'createQuery', array('dql' => $dql), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'createNamedQuery', array('name' => $name), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'createQueryBuilder', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'flush', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'clear', array('entityName' => $entityName), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->clear($entityName);
    }

    public function close()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'close', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->close();
    }

    public function persist($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'persist', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'remove', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'refresh', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'detach', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'merge', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'contains', array('entity' => $entity), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getEventManager', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getConfiguration', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'isOpen', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getUnitOfWork', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getProxyFactory', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'initializeObject', array('obj' => $obj), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'getFilters', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'isFiltersStateClean', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'hasFilters', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return $this->valueHolder19f6b->hasFilters();
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

        $instance->initializere717e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder19f6b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder19f6b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder19f6b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__get', ['name' => $name], $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        if (isset(self::$publicPropertiese1949[$name])) {
            return $this->valueHolder19f6b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f6b;

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

        $targetObject = $this->valueHolder19f6b;
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
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f6b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder19f6b;
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
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__isset', array('name' => $name), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f6b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder19f6b;
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
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__unset', array('name' => $name), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f6b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder19f6b;
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
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__clone', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        $this->valueHolder19f6b = clone $this->valueHolder19f6b;
    }

    public function __sleep()
    {
        $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, '__sleep', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;

        return array('valueHolder19f6b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere717e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere717e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere717e && ($this->initializere717e->__invoke($valueHolder19f6b, $this, 'initializeProxy', array(), $this->initializere717e) || 1) && $this->valueHolder19f6b = $valueHolder19f6b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder19f6b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder19f6b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
