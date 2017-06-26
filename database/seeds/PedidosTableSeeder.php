<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
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

        for($i = 0; $i < 1000; $i++) {

            DB::table('pedidos')->insert([
                'type' => $faker->word
            ]);
        }
    }
}
