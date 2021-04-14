<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id("id_oferta");
            $table->text("comentario");

            $table->foreignId("id_juegoPoseido")->references('id_juego')->on('juego')
            ->constrained()
            ->onUpdate("cascade")
            ->onDelete("cascade");

            $table->foreignId("id_juegoOfertado")->references('id_juego')->on('juego')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
