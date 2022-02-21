<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['nom' => 'voiture bleu', 'created_at'=>now()],
            ['nom' => 'voiture rouge', 'created_at'=>now()],
            ['nom' => 'voiture jaune', 'created_at'=>now()],

        ]);
    }
}
