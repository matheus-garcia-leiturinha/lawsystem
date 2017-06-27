<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContrarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('contrario', function (Blueprint $table) {


            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('nome');

            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('caixa_postal')->nullable();

            $table->integer('document_id')->unsigned();

            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('contato')->nullable();

            $table->integer('pis')->nullable();

            $table->integer('ctps_numero')->nullable();
            $table->integer('ctps_serie')->nullable();
            $table->string('ctps_estado')->nullable();

            $table->string('nome_mae')->nullable();

            $table->timestamps();



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
        Schema::dropIfExists('contrario');
    }
}
