<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:24
 */

namespace Acme\Decorators;


use Acme\Entities\UserType;

class UserDetailsDecorator extends Decoratable
{
    use UserType;
    /**
     * @var User
     */
    protected $user;

    /**
     * @return array
     */
    function present()
    {
        return $this->decoratable->present() + $this->_getBasicUserDetails();
    }

    function _getBasicUserDetails()
    {
        return ['Details' => [
            'firstname' => $this->user->firstname,
            'lastname' => $this->user->lastname
        ]];
    }
}