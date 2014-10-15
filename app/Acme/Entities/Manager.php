<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:09
 */

namespace Acme\Entities;


use Acme\Decorators\Decoratable;
use Acme\Decorators\Presentable;

class Manager implements Presentable  {
use UserType;

    /**
     * @return array
     *
     */
    function present()
    {
       return [];
    }

}