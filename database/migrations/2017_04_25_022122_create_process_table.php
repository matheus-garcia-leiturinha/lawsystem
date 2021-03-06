<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('processos', function (Blueprint $table) {


            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('numero_processual');
            $table->smallInteger('natureza');
            $table->integer('tribunal');
            $table->integer('vara');


            $table->enum('polo',['ativo','passivo']);

            $table->double('valor_causa',15,2);

            $table->date('data_ajuizamento');

            $table->dateTime('data_audiencia_inaugural')->nullable();
            $table->enum('inaugural',['inical','una'])->nullable();
            $table->string('ocorrencia_inaugural')->nullable();

            $table->boolean('pericia');
            $table->integer('pericia_id')->unsigned()->nullable();
            $table->double('pericias_honorarios',15,2)->nullable();



            $table->integer('client_id')->unsigned(); // author
            $table->integer('adv_owner')->unsigned();
            $table->integer('adv_third_party')->unsigned();

            $table->timestamps();



        });

        Schema::table('processos', function($table) {
            $table->foreign('client_id')->references('id')->on('clientes');
            $table->foreign('adv_owner')->references('id')->on('advogados');
            $table->foreign('adv_third_party')->references('id')->on('advogados');
            $table->foreign('pericia_id')->references('id')->on('pericias');
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

        Schema::dropIfExists('processos');
    }
}
