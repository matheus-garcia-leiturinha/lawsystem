<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('clientes')->insert([
            'razao_social' => $faker->name,
            'document_id' => App\Documents::first()->id
        ]);
    }
}
