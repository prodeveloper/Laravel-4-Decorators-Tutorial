<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 16/10/14
 * Time: 00:12
 */

namespace Acme\Decorators;


class EmptyDecorator extends Decoratable
{
    function __construct()
    {

    }

    /**
     * @return array
     */
    function present()
    {
        return [];
    }
}