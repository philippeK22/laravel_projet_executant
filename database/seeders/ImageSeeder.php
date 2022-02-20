<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('images')->insert([
            [
                'nom' => 'Lamborgini',
                'src' => 'lamborgini.jpg',
                'categorie_id' => 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Range Rover',
                'src' => 'range.jpg',
                'categorie_id' => 2,
                'created_at' => now(),
            ],
            [
                'nom' => 'McLaren',
                'src' => 'mcLaren.jpg',
                'categorie_id' => 3,
                'created_at' => now(),
            ],
        ]);
    }
    }

