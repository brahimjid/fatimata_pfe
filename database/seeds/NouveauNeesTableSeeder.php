<?php

use App\NouveauNee;
use Illuminate\Database\Seeder;

class NouveauNeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NouveauNee::truncate();

       /* NouveauNee::create([
            'poids' => 2,
            'sexe' => 'masculin',
            'observation' => 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi',
            'accouchement_id' => 1,
        ]);
        NouveauNee::create([
            'poids' => 2,
            'sexe' => 'masculin',
            'observation' => 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi',
            'accouchement_id' => 2,
        ]);
        NouveauNee::create([
            'poids' => 2,
            'sexe' => 'feminin',
            'observation' => 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi',
            'accouchement_id' => 3,
        ]);*/
    }
}
