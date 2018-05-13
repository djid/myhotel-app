<?php

use App\Departement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();


        Departement::insert([
        	['nom' => 'Artibonite', 'slug' => 'artibonite', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Centre', 'slug' => 'centre', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Grand\'Anse', 'slug' => 'grand-anse', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Nippes', 'slug' => 'nippes', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Nord', 'slug' => 'nord', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Nord-Est', 'slug' => 'nord-est', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Nord-Ouest', 'slug' => 'nord-ouest', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Ouest', 'slug' => 'ouest', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Sud', 'slug' => 'sud', 'created_at' => $now, 'updated_at' => $now],
        	['nom' => 'Sud-Est', 'slug' => 'sud-est', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
