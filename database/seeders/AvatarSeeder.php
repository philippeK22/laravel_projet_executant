<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([

            [
                "name"=>"homme.jpg",
                "created_at"=>now(),
            ],
            [
                "name"=>"femme.png",
                "created_at"=>now(),
            ],
            [
                "name"=>"chien.png",
                "created_at"=>now(),
            ],
            [
                "name"=>"chat.png",
                "created_at"=>now(),
            ],
            [
                "name"=>"parfeaut.png",
                "created_at"=>now(),
            ],
        ]);
    }
}
