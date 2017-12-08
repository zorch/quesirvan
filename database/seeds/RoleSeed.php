<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Models\Roles\Role::class, 1)->create([
        'name' => 'admin',
        'label' => 'Administrador'
      ]);
      factory(App\Models\Roles\Role::class, 1)->create([
        'name' => 'prayer',
        'label' => 'Orador'
      ]);
    }
}
