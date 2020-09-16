<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('role_user')->truncate();
       User::truncate();

        $admin=User::create([
            'name' => 'admin',
            'email' => 'admin@gnn.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
     $medecin=User::create([
            'name' => 'medecin',
            'email' => 'medecin@gnn.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $agent_du_minister=User::create([
            'name' => 'agent_du_minister',
            'email' => 'agent_du_minister@gnn.com',
            'email_verified_at' => now(),
            'password' => Hash::make('0000'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
       
    $adminRole=Role::where('nom','admin')->first();
    $medecinRole=Role::where('nom','medecin')->first();
    $agent_du_ministerRole=Role::where('nom','agent_du_minister')->first();

    $admin->roles()->attach($adminRole);
    $medecin->roles()->attach($medecinRole);
    $agent_du_minister->roles()->attach($agent_du_ministerRole);
        }
}
