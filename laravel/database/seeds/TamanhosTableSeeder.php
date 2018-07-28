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
        $tamanho->tamanho = '33/34';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '35/36';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '37/38';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '39/40';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '41/42';
        $tamanho->save();

        $tamanho = new App\Tamanho;
        $tamanho->tamanho = '43/44';
        $tamanho->save();
    }
}
