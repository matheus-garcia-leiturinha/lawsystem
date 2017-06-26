<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  //
        Schema::create('pedidos_processo', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('pedido_id')->unsigned()->nullable();
            $table->integer('processo_id')->unsigned()->nullable();
            $table->double('pedido_valor',15,2)->default(0)->nullable();
            $table->enum('risco',['','possível','provável','remoto']);
            $table->timestamps();

        });


        Schema::table('pedidos_processo', function($table) {

            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->foreign('processo_id')->references('id')->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
