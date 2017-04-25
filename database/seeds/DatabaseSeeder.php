<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
//        $this->call(DocumentsTableSeeder::class);
//        $this->call(ClientsTableSeeder::class);
//        $this->call(ContrarioTableSeeder::class);
//        $this->call(TribunalTableSeeder::class);
//        $this->call(VaraTableSeeder::class);
        $this->call(AdvocatesTableSeeder::class);
    }
}
