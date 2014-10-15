<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 16/10/14
 * Time: 01:02
 */

namespace Acme\Values;

use WorkerRole;
use ManagerLevel;
use Acme\Entities\Manager;

class PaidWorkersManager
{

    /**
     * @return Manager
     */
    protected function _paidWorkersManager()
    {
        $user_who_is_manager = $this->_userWhoManagesPaidWorkers();
        $manager = new Manager($user_who_is_manager);
        return $manager;
    }

    /**
     * Totally arbitraty way to get Manager who manages the roles
     * @return mixed
     */
    protected function _userWhoManagesPaidWorkers()
    {
        $user_who_is_manager = ManagerLevel::all()->random()->user;
        return $user_who_is_manager;
    }

    function get()
    {
        return $this->_paidWorkersManager();
    }
} 