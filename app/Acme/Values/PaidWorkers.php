<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 16/10/14
 * Time: 01:01
 */

namespace Acme\Values;
use Acme\Decorators\WorkerDetailsCollectionDecorator;
use Acme\Entities\Manager;
use WorkerRole;
class PaidWorkers {

    /**
     * Totally arbitraty way to get paid roles. Put in actual business logic here
     * @return mixed
     */
    protected function _paidWorkerRoles()
    {
        $eloquent_collection = WorkerRole::take(5)->get();
        return $eloquent_collection;
    }
    /**
     * @return WorkerDetailsCollectionDecorator
     */
    protected function _getPaidWorkers()
    {
        $paid_workers_roles = $this->_paidWorkerRoles();
        $workers = new WorkerDetailsCollectionDecorator($paid_workers_roles);
        return $workers;
    }


    function get(){
        return $this->_getPaidWorkers();
    }
}