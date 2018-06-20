<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new App\Admin;
        $admin->name = 'Erick';
        $admin->email = 'erickluques@gmail.com';
        $admin->password = bcrypt('0501208');
        $admin->remember_token = str_random(10);
        $admin->save();
    }
}
