<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new App\Categoria;
        $categoria->nome = 'Casamento';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Formatura';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Infantil';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Times';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Aniversário';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Super Heróis';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Debutante';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Times';
        $categoria->save();
    }
}
