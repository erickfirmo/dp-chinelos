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
        
        $this->call(StatusTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(TamanhosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);


    }
}
