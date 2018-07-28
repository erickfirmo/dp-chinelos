<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTamanhosDoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamanhos_do_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produto_id');
            $table->unsignedInteger('tamanho_id');
            $table->timestamps();


            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos');

            $table->foreign('tamanho_id')
                ->references('id')
                ->on('tamanhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamanhos_do_produto');
    }
}
