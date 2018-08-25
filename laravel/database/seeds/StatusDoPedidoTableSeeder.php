<?php

use Illuminate\Database\Seeder;

class StatusDoPedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_do_pedido = new App\StatusDoPedido;
        $status_do_pedido->nome = 'Não lido';
        $status_do_pedido->save();

        $status_do_pedido = new App\StatusDoPedido;
        $status_do_pedido->nome = 'Pendente';
        $status_do_pedido->save();

        $status_do_pedido = new App\StatusDoPedido;
        $status_do_pedido->nome = 'Concluído';
        $status_do_pedido->save();

        $status_do_pedido = new App\StatusDoPedido;
        $status_do_pedido->nome = 'Cancelado';
        $status_do_pedido->save();
    }
}
