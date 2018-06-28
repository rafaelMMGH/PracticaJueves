<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSGJCDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_g_j_c__datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->char('telefono',15);
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
        Schema::dropIfExists('s_g_j_c__datos');
    }
}
