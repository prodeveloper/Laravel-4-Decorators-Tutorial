<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class ManagerLevelsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $users=User::all();
        foreach ($users as $user) {
            if($this->_evenUserId($user)){
                $m_l= new ManagerLevel(['level'=>$faker->word]);
                $user->managerLevel()->save($m_l);
            }
        }

	}

    /**
     * @param $user
     * @return bool
     */
    protected function _evenUserId($user)
    {
        return ($user->id % 2) == 0;
    }

}
