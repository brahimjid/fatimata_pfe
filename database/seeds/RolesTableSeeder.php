<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
      Role::create(['nom'=>'admin']);
      Role::create(['nom'=>'medecin']);
      Role::create(['nom'=>'agent_du_minister']);
    }
}
