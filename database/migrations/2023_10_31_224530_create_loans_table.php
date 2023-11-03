<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id()->comment("Identificador del Prestamo");
            $table->unsignedBigInteger("id_contra")->comment("Id del Contratista");
            $table->foreign("id_contra")->references("id")->on("contractors");
            $table->unsignedBigInteger("id_team")->comment("Id del Equipo de Campo");
            $table->foreign("id_team")->references("id")->on("equipment");
            $table->date("date_dev")->comment("Fecha de Devolución");
            $table->date("date_prest")->comment("Fecha de Prestamo");
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
        Schema::dropIfExists('loans');
    }
}
