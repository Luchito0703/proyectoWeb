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
            $table->id();
            $table->string("id_prest")->comment("Id del prestamo");
            $table->unsignedBigInteger("id_contractor")->comment("Id del Contratista");
            $table->foreign("id_contractor")->references("id")->on("contractors");
            $table->unsignedBigInteger("id_equipment")->comment("Id del Equipo de Campo");
            $table->foreign("id_equipment")->references("id")->on("equipment");
            $table->date("date_loan")->comment("Fecha de Prestamo");
            $table->date("date_devolution")->comment("Fecha de Devolución");
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
