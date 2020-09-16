<?php

use Illuminate\Database\Seeder;
use App\Hopital;
class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Hopital::truncate();

        Hopital::create(['nom' => 'Sadagha' , 'Departement_id' => 17]);
        Hopital::create(['nom' => 'H_aoujeft' , 'Departement_id' => 1]);
        Hopital::create(['nom' => 'H_atar' , 'Departement_id' => 2]);
        Hopital::create(['nom' => 'H_chinguiti' , 'Departement_id' => 3]);
        Hopital::create(['nom' => 'H_ouadane' , 'Departement_id' => 4]);

        Hopital::create(['nom' => 'H_barkewol' , 'Departement_id' => 5]);
        Hopital::create(['nom' => 'H_kankossa' , 'Departement_id' => 6]);
        Hopital::create(['nom' => 'H_kiffa' , 'Departement_id' =>7]);
        Hopital::create(['nom' => 'H_guerou' , 'Departement_id' => 8]);

        Hopital::create(['nom' => 'H_boumeid' , 'Departement_id' => 9]);
        Hopital::create(['nom' => 'H_boghe' , 'Departement_id' => 10]);
        Hopital::create(['nom' => 'H_bababe' , 'Departement_id' => 11]);
        Hopital::create(['nom' => 'H_mbagne' , 'Departement_id' => 12]);

        Hopital::create(['nom' => 'H_magtalhjar' , 'Departement_id' => 13]);
        Hopital::create(['nom' => 'Zaid' , 'Departement_id' => 14]);
        Hopital::create(['nom' => 'nationnal' , 'Departement_id' => 15]);
        Hopital::create(['nom' => 'Sava' , 'Departement_id' => 16]);
    }
}
