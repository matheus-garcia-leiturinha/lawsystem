<?php

use Illuminate\Database\Seeder;

class ContrarioTableSeeder extends Seeder
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

            DB::table('contrario')->insert([
                'nome' => $faker->name,
                'cep' => $faker->numberBetween(0,37701000),
                'cidade' => $faker->numberBetween(0,1000),
                'logradouro' => $faker->streetAddress,
                'document_id' => App\Documents::first()->id,
                'email' => $faker->email,
                'pis' => $faker->numberBetween(0,1000),
                'nome_mae' => $faker->name,

            ]);

        }
    }
}
