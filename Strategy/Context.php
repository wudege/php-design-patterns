<?php
/**
 * 策略模式，代码模板
 * 模式意图 ：定义一系列的算法，把它们一个个封装起来，并且使它们可相互替换。策略模式可以使算法可独立于使用它的客户而变化。
 *
 * Date: 1/4/14
 * Time: 20:35
 * Author: zengdewu <dewuzeng@gmail.com>
 */

/**
 * 上下文角色
 * Class Context
 */
class Context 
{
    //引用的策略
    private $_strategy;

    public function __construct(Strategy $strategy)
    {
        $this->_strategy = $strategy;
    }

    public function contextInterface()
    {
        $this->_strategy->algorithmInterface();
    }
} 