<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker_en = FakerFactory::create('en_US');

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker_en->name,
                'email' => $faker_en->email,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
