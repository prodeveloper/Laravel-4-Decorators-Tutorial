<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:10
 */

namespace Acme\Entities;


use Acme\Decorators\Presentable;

class Worker implements Presentable
{
    use UserType;

    function present()
    {
        return [];
    }

}