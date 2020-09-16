<?php

use App\Wilaya;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilaya::truncate();

     /*   Region::create(['nom' => 'Adrar']);
        Region::create(['nom' => 'Assaba']);
        Region::create(['nom' => 'Brakna']);
        Region::create(['nom' => 'Dakhlet Nouadhibou']);
        Region::create(['nom' => 'Gorgol']);
        Region::create(['nom' => 'Guidimagha']);
        Region::create(['nom' => 'Hodh ech chargui']);
        Region::create(['nom' => 'Hodh El Gaharbi']);
        Region::create(['nom' => 'Inchiri']);
        Region::create(['nom' => 'Nouakchott']);
        Region::create(['nom' => 'Tagant']);
        Region::create(['nom' => 'Tiris Zemour']);
        Region::create(['nom' => 'Tagant']);*/

    }
}
