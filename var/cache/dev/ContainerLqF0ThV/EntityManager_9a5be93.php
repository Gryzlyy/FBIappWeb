<?php

namespace ContainerLqF0ThV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere8045 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbeec8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5d3b = [
        
    ];

    public function getConnection()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getConnection', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getMetadataFactory', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getExpressionBuilder', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'beginTransaction', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getCache', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'transactional', array('func' => $func), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->transactional($func);
    }

    public function commit()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'commit', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->commit();
    }

    public function rollback()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'rollback', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getClassMetadata', array('className' => $className), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'createQuery', array('dql' => $dql), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'createNamedQuery', array('name' => $name), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'createQueryBuilder', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'flush', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'clear', array('entityName' => $entityName), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->clear($entityName);
    }

    public function close()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'close', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->close();
    }

    public function persist($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'persist', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'remove', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'refresh', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'detach', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'merge', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'contains', array('entity' => $entity), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getEventManager', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getConfiguration', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'isOpen', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getUnitOfWork', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getProxyFactory', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'initializeObject', array('obj' => $obj), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'getFilters', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'isFiltersStateClean', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'hasFilters', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return $this->valueHoldere8045->hasFilters();
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

        $instance->initializerbeec8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere8045) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere8045 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere8045->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__get', ['name' => $name], $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        if (isset(self::$publicPropertiesa5d3b[$name])) {
            return $this->valueHoldere8045->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8045;

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

        $targetObject = $this->valueHoldere8045;
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
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8045;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere8045;
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
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__isset', array('name' => $name), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8045;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere8045;
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
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__unset', array('name' => $name), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8045;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere8045;
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
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__clone', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        $this->valueHoldere8045 = clone $this->valueHoldere8045;
    }

    public function __sleep()
    {
        $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, '__sleep', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;

        return array('valueHoldere8045');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbeec8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbeec8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbeec8 && ($this->initializerbeec8->__invoke($valueHoldere8045, $this, 'initializeProxy', array(), $this->initializerbeec8) || 1) && $this->valueHoldere8045 = $valueHoldere8045;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere8045;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere8045;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
