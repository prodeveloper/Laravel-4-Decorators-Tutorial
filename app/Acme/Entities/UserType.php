<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:13
 */

namespace Acme\Entities;
use User;

trait UserType {

    /**
     * @var User
     */
    protected $user;

    function __construct($user)
    {
        $this->user = $user;
    }

    function getUser(){
        return $this->user;
    }
    function displayName(){
        return $this->user->displayName();
    }
} 