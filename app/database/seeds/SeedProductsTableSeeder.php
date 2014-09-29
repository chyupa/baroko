<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeedProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$ext = ['m', 'buc', 'punga'];
		foreach(range(1, 50) as $index)
		{
			Products::create([
				'categ_id' => rand(0,5),
				'name' => $faker->name,
				'price' => rand(10, 90),
				'ext' => $ext[array_rand($ext)],
				'outlet' => rand(0,1),
				'cant_outlet' => rand(10,50),
				'description' => $faker->text,
				'public' => 1,
				'featured' => 0
			]);
		}
	}

}