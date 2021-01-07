<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generica', function (Blueprint $table) {
            $table->primaryKey('pg_id');
            $table->string('pg_nombre');
            $table->longText('pg_descripcion');
            $table->integer('pg_clave');
            $table->integer('cap_id');
            $table->integer('cto_id');
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
        Schema::dropIfExists('genericas');
    }
}
