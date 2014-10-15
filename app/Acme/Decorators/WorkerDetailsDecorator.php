<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 23:58
 */

namespace Acme\Decorators;


class WorkerDetailsDecorator  {
protected $worker;
    /**
     * @return array
     */
    function present()
    {
        return $this->_basicWorkerDetails();
    }
    function setWorker($worker){
        $this->worker=$worker;
        return $this;
    }
    /**
     * @return array
     */
    protected function _basicWorkerDetails()
    {
        $worker_details = [
            'role' => $this->worker->getUser()->workerRole->role,
            'name'=>$this->worker->getUser()->displayName()
        ];
        return compact('worker_details');
    }
}