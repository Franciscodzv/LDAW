<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles__permisos', function (Blueprint $table) {
            $table->foreignId("id_rol")
            ->constrained()
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->foreignId("id_permiso")
            ->constrained()
            ->onDelete("cascade")
            ->onUpdate("cascade");
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
        Schema::dropIfExists('roles__permisos');
    }
}
