<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"=>"kanen",
                "prenom"=>"phiippe",
                "age"=>26,
                "email"=>"philippe@hotmail.com",
                "password"=>Hash::make("philippo"),
                "role_id"=>1,
                "avatar_id"=>1, //home avatar
                "created_at"=>now(),
            ],

            [
                "name"=>"lona",
                "prenom"=>"tyff",
                "age"=>23,
                "email"=>"kanen@hotmail.com",
                "password"=>Hash::make("zidane10"),
                "role_id"=>2,
                "avatar_id"=>2, //femme avatar
                "created_at"=>now(),
            ],
        ]);
    }
}
