<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AmptronTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){

            DB::table('contact')->insert([
                'namadepan' => $faker->username,
                'namabelakang' => $faker->username,
                'email' => $faker->email,
                'company' => $faker->company,
                'telepon' => $faker->phoneNumber,
                'alamat' => $faker->streetAddress,
                'kota' => $faker->city,
                'postcode' => $faker->postcode,
                'pesan' => $faker->word,
            ]);

        }
    }
}
