<?php

use Illuminate\Database\Seeder;

use App\Models\Roles\Role;

use App\Models\Users\User;

use App\Models\Users\UserStat;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        UserStat::truncate();
        Role::truncate();
        User::truncate();

        $this->call('UserSeed');
        $this->call('UserStatSeed');
        $this->call('RoleSeed');

      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
