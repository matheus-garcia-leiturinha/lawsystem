<?php

use Illuminate\Database\Seeder;

class VaraTableSeeder extends Seeder
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

            DB::table('vara')->insert([
                'id' => $faker->numberBetween(10,99),
                'nome' => $faker->name,
                'cidade' => $faker->streetAddress
            ]);

        }
    }
}
