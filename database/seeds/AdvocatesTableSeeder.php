<?php

use Illuminate\Database\Seeder;

class AdvocatesTableSeeder extends Seeder
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

        for($i = 0; $i < 10; $i++){

            DB::table('advogados')->insert([
                'oab' => $faker->numberBetween(10000,999999),
                'nome' => $faker->name,
                'telefone' => $faker->numberBetween(10000,999999),
                'email' => $faker->email
            ]);
        }
    }
}
