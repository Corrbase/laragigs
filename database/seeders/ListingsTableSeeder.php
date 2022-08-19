<?php

namespace Database\Seeders;

use App\Models\Listing;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    public function run()
    {
        $faker_en = FakerFactory::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            Listing::create([
                'title' => $faker_en->sentence(2, true),
                'email' => $faker_en->email,
                'website' => $faker_en->url,
                'tags' => $faker_en->sentence(2, true), // json_encode($faker_en->words(rand(1, 3)), true),
                'company' => $faker_en->company,
                'location' => $faker_en->city,
                'description' => $faker_en->sentence(rand(10, 20), true),
            ]);
        }
    }
}
