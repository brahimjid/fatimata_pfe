<?php

use App\Accouchement;
use Illuminate\Database\Seeder;

class AccouchementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accouchement::truncate();

       /* Accouchement::create([
            'patient_id' => 1,
            'hopital_id' => 1,
            'etat_nn' => 'vivant',
            'etat_pat' => 'vivant',
            'type' => 'normal',
        ]);
        Accouchement::create([
            'patient_id' => 1,
            'hopital_id' => 2,
            'etat_nn' => 'vivant',
            'etat_pat' => 'vivant',
            'type' => 'normal',
        ]);
        Accouchement::create([
            'patient_id' => 2,
            'hopital_id' => 3,
            'etat_nn' => 'more',
            'etat_pat' => 'vivant',
            'type' => 'normal',
        ]);
        Accouchement::create([
            'patient_id' => 3,
            'hopital_id' => 1,
            'etat_nn' => 'more',
            'etat_pat' => 'vivant',
            'type' => 'normal',
        ]);
        Accouchement::create([
            'patient_id' => 3,
            'hopital_id' => 1,
            'etat_nn' => 'more',
            'etat_pat' => 'vivant',
            'type' => 'normal',
        ]);*/
    }
}
