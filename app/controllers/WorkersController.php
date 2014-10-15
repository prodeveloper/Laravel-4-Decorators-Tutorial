<?php
use Acme\Decorators\ManagerDetailsDecorator;
use Acme\Values\PaidWorkers;
use Acme\Values\PaidWorkersManager;


/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 16/10/14
 * Time: 00:19
 */
class WorkersController extends BaseController
{
    function paidWorkers()
    {
        $workers = (new PaidWorkers())->get();
        $manager =( new PaidWorkersManager())->get();
        $workers = (new ManagerDetailsDecorator($workers))->setManager($manager);
        return Response::json($workers->present());
    }


}