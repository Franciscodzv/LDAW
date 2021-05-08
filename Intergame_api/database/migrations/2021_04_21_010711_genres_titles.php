<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenresTitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres_titles', function (Blueprint $table) {
            
            $table->foreignId('id_genre')->references('id')->on('genres')
            ->constraint()
            ->onUpdate("cascade")
            ->onDelete("cascade");

            $table->foreignId('id_title')->references('id')->on('titles')
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
        Schema::dropIfExists('genres_titles');
    }
}
