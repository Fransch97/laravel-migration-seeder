<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',150);
            $table->string('start_station', 150) ;
            $table->string('arrival_place', 150) ;
            $table->time('starting_time') ;
            $table->time('arrival_time') ;
            $table->text('train_code') ;
            $table->tinyInteger('carriages_num') ;
            $table->boolean('in_time');
            $table->boolean('deleted') ;
            $table->timestamps();

    // Ogni treno dovrà avere:
    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
