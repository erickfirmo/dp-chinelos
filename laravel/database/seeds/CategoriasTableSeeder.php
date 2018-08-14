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
        $categoria->nome = 'Todos';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Casamento';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Formatura';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Infantis';
        $categoria->save();

        $categoria = new App\Categoria;
        $categoria->nome = 'Times';
        $categoria->save();
    }
}
