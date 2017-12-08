<?php

use Illuminate\Database\Seeder;

class UserStatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Models\Users\UserStat::class, 1)->create();
    }
}
