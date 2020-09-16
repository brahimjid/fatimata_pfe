<?php

use Illuminate\Database\Seeder;
use App\Patient;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::truncate();

     /*   Patient::create([
            'nom' => 'ramata',
            'prenom' => 'sidi',
            'duree_gross' => 8,
            'nom_mari' => 'oumar',
            'situation' => 'mariee',
            'telephone' => 49000000,
            'poids' => 78,
            'age' => 23,
            'observation' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.',
        ]);
        Patient::create([
            'nom' => 'fati',
            'prenom' => 'ali',
            'duree_gross' => 8,
            'nom_mari' => 'sidi',
            'situation' => 'mariee',
            'telephone' => 49000000,
            'poids' => 78,
            'age' => 23,
            'observation' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.',
        ]);
        Patient::create([
            'nom' => 'oumou',
            'prenom' => 'oumar',
            'duree_gross' => 8,
            'nom_mari' => 'thiam',
            'situation' => 'selibataire',
            'telephone' => 23454546,
            'poids' => 60,
            'age' => 30,
            'observation' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.',
        ]);*/
    }

}
