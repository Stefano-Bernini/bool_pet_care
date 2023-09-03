<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_sickness', function (Blueprint $table) {
            
            // tabella ponte id animals
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');

            // tabella ponte id sickness
            $table->unsignedBigInteger('sickness_id');
            $table->foreign('sickness_id')->references('id')->on('sicknesses');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_sickness');
    }
};
