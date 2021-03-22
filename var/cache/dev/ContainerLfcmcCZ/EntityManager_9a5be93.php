<?php

namespace ContainerLfcmcCZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder31d57 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer83135 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6217 = [
        
    ];

    public function getConnection()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getConnection', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getMetadataFactory', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getExpressionBuilder', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'beginTransaction', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getCache', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getCache();
    }

    public function transactional($func)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'transactional', array('func' => $func), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->transactional($func);
    }

    public function commit()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'commit', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->commit();
    }

    public function rollback()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'rollback', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getClassMetadata', array('className' => $className), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'createQuery', array('dql' => $dql), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'createNamedQuery', array('name' => $name), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'createQueryBuilder', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'flush', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'clear', array('entityName' => $entityName), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->clear($entityName);
    }

    public function close()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'close', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->close();
    }

    public function persist($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'persist', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'remove', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'refresh', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'detach', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'merge', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'contains', array('entity' => $entity), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getEventManager', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getConfiguration', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'isOpen', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getUnitOfWork', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getProxyFactory', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'initializeObject', array('obj' => $obj), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'getFilters', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'isFiltersStateClean', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'hasFilters', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return $this->valueHolder31d57->hasFilters();
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

        $instance->initializer83135 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder31d57) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder31d57 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder31d57->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__get', ['name' => $name], $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        if (isset(self::$publicPropertiesb6217[$name])) {
            return $this->valueHolder31d57->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d57;

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

        $targetObject = $this->valueHolder31d57;
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
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d57;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder31d57;
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
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__isset', array('name' => $name), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d57;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder31d57;
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
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__unset', array('name' => $name), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d57;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder31d57;
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
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__clone', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        $this->valueHolder31d57 = clone $this->valueHolder31d57;
    }

    public function __sleep()
    {
        $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, '__sleep', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;

        return array('valueHolder31d57');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83135 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83135;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer83135 && ($this->initializer83135->__invoke($valueHolder31d57, $this, 'initializeProxy', array(), $this->initializer83135) || 1) && $this->valueHolder31d57 = $valueHolder31d57;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31d57;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31d57;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
