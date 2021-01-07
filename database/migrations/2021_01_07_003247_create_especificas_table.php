<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especifica', function (Blueprint $table) {
            $table->primaryKey('pe_id');
            $table->integer('pg_id');
            $table->string('pe_nombre');
            $table->longText('pe_descripcion');
            $table->longText('pe_comprasDirectas');
            $table->integer('pe_clave');
            $table->integer('pe_reductible');
            $table->integer('pe_cedula');
            $table->integer('pe_clc');
            $table->integer('tg_id');
            $table->integer('og_id');
            $table->integer('tno_id');
            $table->integer('idp_id');
            $table->integer('clg_id');
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
        Schema::dropIfExists('especificas');
    }
}
