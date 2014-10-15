<?php
namespace Acme\Decorators;
use Acme\Entities\Manager;
use Illuminate\Support\Collection;

/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 12:48
 */
class ManagerDetailsDecorator extends  Decoratable
{
    protected $manager;


    function present()
    {
        return $this->decoratable->present() + $this->_basicManagerDetails();

    }

    function setManager(Manager $manager){
        $this->manager=$manager;
        return $this;
    }

    /**
     * @return array
     */
    protected function _basicManagerDetails()
    {
        $manager_details = [
            'level' => $this->manager->getUser()->managerLevel->level,
            'name'=>$this->manager->getUser()->displayName()
        ];
        return compact('manager_details');
    }
} 