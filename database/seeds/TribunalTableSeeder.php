<?php

use Illuminate\Database\Seeder;

class TribunalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++){

            DB::table('tribunal')->insert([
                'id' => $faker->numberBetween(10,99),
                'nome' => $faker->name,
                'estado' => $faker->streetAddress
            ]);

        }
    }
}
