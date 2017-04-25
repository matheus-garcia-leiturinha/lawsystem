<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTribunalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tribunal', function (Blueprint $table) {


            $table->engine = 'InnoDB';

            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('nome');
            $table->string('estado');
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
        Schema::dropIfExists('tribunal');
    }
}
