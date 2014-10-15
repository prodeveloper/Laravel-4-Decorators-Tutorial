<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 12:51
 */
namespace Acme\Decorators;
abstract class Decoratable implements  Presentable{
    /**
     * @var Decoratable
     */
    protected $decoratable;

    function __construct(Decoratable $decoratable)
    {
        $this->decoratable = $decoratable;
    }


}