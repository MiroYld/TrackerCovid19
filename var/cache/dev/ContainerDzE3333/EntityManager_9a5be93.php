<?php

namespace ContainerDzE3333;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere6686 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf5d02 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa331c = [
        
    ];

    public function getConnection()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getConnection', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getMetadataFactory', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getExpressionBuilder', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'beginTransaction', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getCache', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'transactional', array('func' => $func), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'commit', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->commit();
    }

    public function rollback()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'rollback', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getClassMetadata', array('className' => $className), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'createQuery', array('dql' => $dql), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'createNamedQuery', array('name' => $name), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'createQueryBuilder', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'flush', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'clear', array('entityName' => $entityName), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->clear($entityName);
    }

    public function close()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'close', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->close();
    }

    public function persist($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'persist', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'remove', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'refresh', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'detach', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'merge', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'contains', array('entity' => $entity), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getEventManager', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getConfiguration', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'isOpen', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getUnitOfWork', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getProxyFactory', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'initializeObject', array('obj' => $obj), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'getFilters', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'isFiltersStateClean', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'hasFilters', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return $this->valueHoldere6686->hasFilters();
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

        $instance->initializerf5d02 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere6686) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere6686 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere6686->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__get', ['name' => $name], $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        if (isset(self::$publicPropertiesa331c[$name])) {
            return $this->valueHoldere6686->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6686;

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

        $targetObject = $this->valueHoldere6686;
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
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6686;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere6686;
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
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__isset', array('name' => $name), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6686;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere6686;
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
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__unset', array('name' => $name), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6686;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere6686;
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
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__clone', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        $this->valueHoldere6686 = clone $this->valueHoldere6686;
    }

    public function __sleep()
    {
        $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, '__sleep', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;

        return array('valueHoldere6686');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf5d02 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf5d02;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf5d02 && ($this->initializerf5d02->__invoke($valueHoldere6686, $this, 'initializeProxy', array(), $this->initializerf5d02) || 1) && $this->valueHoldere6686 = $valueHoldere6686;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere6686;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere6686;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
