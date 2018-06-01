<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new App\Status;
        $status->nome = 'Ativo';
        $status->save();

        $status = new App\Status;
        $status->nome = 'Inativo';
        $status->save();
    }
}
