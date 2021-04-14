<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria__titulos', function (Blueprint $table) {
            
            $table->foreignId("id_categoria")
            ->constraint()
            ->onUpdate("cascade")
            ->onDelete("cascade");

            $table->foreignId("id_titulo")
            ->constraint()
            ->onUpdate("cascade")
            ->onDelete("cascade");
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
        Schema::dropIfExists('categoria__titulos');
    }
}
