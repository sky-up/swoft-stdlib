<?php

namespace Swoft\Bean;

use Swoft\Bean\Annotation\Scope;
use Swoft\Bean\ObjectDefinition\MethodInjection;

/**
 * bean对象定义类
 *
 * @uses      ObjectDefinition
 * @version   2017年08月18日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ObjectDefinition
{
    /**
     * Entry name (most of the time, same as $classname).
     *
     * @var string
     */
    private $name;

    /**
     * Class name (if null, then the class name is $name).
     *
     * @var string|null
     */
    private $className;

    /**
     * @var int
     */
    private $scope = Scope::SINGLETON;

    /**
     * Referenced bean, default is null
     *
     * @var string|null
     */
    private $ref;

    /**
     * Constructor parameter injection.
     *
     * @var MethodInjection|null
     */
    private $constructorInjection = null;

    /**
     * Property injections.
     * @var array
     */
    private $propertyInjections = [];

    /**
     * Method calls.
     *
     * @var MethodInjection[][]
     */
    private $methodInjections = [];

    /**
     * 设置bean名称
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 初始化bean名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * 获取bean类名
     *
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * 初始化bean类名
     *
     * @param string $className
     */
    public function setClassName(string $className)
    {
        $this->className = $className;
    }

    /**
     * 设置bean类型
     *
     * @return int
     */
    public function getScope(): int
    {
        return $this->scope;
    }


    /**
     * get referenced bean
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * set referenced bean
     *
     * @param string $ref
     */
    public function setRef(string $ref)
    {
        $this->ref = $ref;
    }

    /**
     * 获取bean类型
     *
     * @param int $scope
     */
    public function setScope(int $scope)
    {
        $this->scope = $scope;
    }

    /**
     * 获取构造函数注入对象
     *
     * @return MethodInjection|null
     */
    public function getConstructorInjection()
    {
        return $this->constructorInjection;
    }

    /**
     * 设置构造函数注入对象
     *
     * @param MethodInjection $constructorInjection
     */
    public function setConstructorInjection(MethodInjection $constructorInjection)
    {
        $this->constructorInjection = $constructorInjection;
    }

    /**
     * 获取属性注入对象
     *
     * @return mixed
     */
    public function getPropertyInjections()
    {
        return $this->propertyInjections;
    }

    /**
     * 设置属性注入对象
     *
     * @param mixed $propertyInjections
     */
    public function setPropertyInjections($propertyInjections)
    {
        $this->propertyInjections = $propertyInjections;
    }

    /**
     * 获取方法注入对象
     *
     * @return ObjectDefinition\MethodInjection[][]
     */
    public function getMethodInjections(): array
    {
        return $this->methodInjections;
    }

    /**
     * 设置方法注入对象
     *
     * @param ObjectDefinition\MethodInjection[][] $methodInjections
     */
    public function setMethodInjections(array $methodInjections)
    {
        $this->methodInjections = $methodInjections;
    }
}
