<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 23:16
 */

namespace Acme\Entities;


use Acme\Decorators\Decoratable;
use Acme\Decorators\EmptyDecorator;
use Acme\Decorators\ManagerDetailsDecorator;
use Acme\Decorators\Presentable;
use Illuminate\Database\Eloquent\Collection;

class Workers extends EmptyDecorator
{
    protected $workers_collection;

    /**
     * @return array
     */
    function present()
    {
        return $this->workers_collection->toArray();

    }

    function setCollection(Collection $workers_collection)

    {
        $this->workers_collection= $this->workers_collection= $workers_collection->map(function($worker_role){
            return (new Worker())->setUser($worker_role->user);
        });
        return $this;

    }
}