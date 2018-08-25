<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosDoPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_do_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('unidades');
            $table->string('tamanho');
            $table->float('preco_unitario');
            $table->float('preco_total');
            $table->unsignedInteger('pedido_id');
            $table->unsignedInteger('produto_id');
            $table->timestamps();

            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos');

            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_do_pedido');

    }
}
