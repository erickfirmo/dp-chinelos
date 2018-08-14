<?php

use Illuminate\Database\Seeder;

class TamanhosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '33';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '34';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '35';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '36';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '37';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '38';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '39';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '40';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '41';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '42';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '43';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '44';
        $tamanho->save();
    }
}
