<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 16/10/14
 * Time: 00:16
 */

namespace Acme\Decorators;


use Acme\Entities\Worker;
use Illuminate\Database\Eloquent\Collection;

class WorkerDetailsCollectionDecorator extends Decoratable {



    protected $workers_collection;

    function __construct($workers_collection)
    {
        $this->_decorateEachWorkerWithDetails($workers_collection);
    }

    /**
     * @return array
     */
    function present()
    {
        return $this->workers_collection->toArray();

    }

    /**
     * @param $workers_collection
     */
    protected function _decorateEachWorkerWithDetails($workers_collection)
    {
        $this->workers_collection = $this->workers_collection = $workers_collection->map(function ($worker_role) {
            $worker = new Worker($worker_role->user);
            return (new WorkerDetailsDecorator())->setWorker($worker)->present();
        });;
    }


}