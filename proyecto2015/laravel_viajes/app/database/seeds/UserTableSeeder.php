<?php

use Viajes\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            User::create([
                'id'                => $index,
                'dni'               => $faker->numberBetween($min = 10000000, $max = 99999999),
                'nombrecompleto'    => $faker->name,
                'email'             => $faker->email,
                'celular'           => $faker->phoneNumber,
                'password'             => \Hash::make(123456),
                'foto'              => $faker->imageUrl($width = 640, $height = 480)
			]);
		}
	}

}