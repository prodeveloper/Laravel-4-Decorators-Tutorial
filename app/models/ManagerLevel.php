<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 15/10/14
 * Time: 13:21
 */

class ManagerLevel extends Eloquent{
protected $table='manager_levels';
    function user(){
        return $this->belongsTo('User');
    }
} 