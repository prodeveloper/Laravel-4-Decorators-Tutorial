<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class WorkerRolesTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();
        $users=User::all();
        foreach ($users as $user) {
            if($this->_oddUserId($user)){
                $w_r= new WorkerRole(['role'=>$faker->word]);
                $user->workerRole()->save($w_r);
            }
        }

    }

    /**
     * @param $user
     * @return bool
     */
    protected function _oddUserId($user)
    {
        return ($user->id % 3) == 0;
    }


}
