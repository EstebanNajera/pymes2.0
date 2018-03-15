<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Users;

class Users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
        	# code...

        	App\Users::create([

        		'nombre' => $faker->firstName,
        		'apellidoM' => $faker->lastName,
        		'apellidoP' => $faker->lastName,
        		'email' => $faker->email,
        		'password' => $faker->numberBetween(1000000,9999999),
        		'id_role' => $faker->randomElement(array(1,2,3),
        		'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')


        	 ]);


        }
    }
}
