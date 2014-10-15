<?php

/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:22
 */
class WorkerRole extends Eloquent
{
    protected $table = 'worker_roles';
    function user(){
        return $this->belongsTo('User');
    }
} 