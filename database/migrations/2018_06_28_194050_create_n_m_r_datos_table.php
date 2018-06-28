<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNMRDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_m_r_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apPaterno');
            $table->char('apMaterno',50);
            $table->char('phone',20);
            $table->string('email');
            $table->string('sex');
            $table->integer('age');
            $table->string('password');
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
        Schema::dropIfExists('n_m_r_datos');
    }
}
