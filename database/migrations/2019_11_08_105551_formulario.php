<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('data_nascimento');
            $table->string('endereco');
            $table->integer('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone_fixo');
            $table->string('telefone_celular');
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
        Schema::dropIfExists('formulario');
    }
}
