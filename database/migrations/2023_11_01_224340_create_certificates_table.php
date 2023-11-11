<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string("id_certificate")->comment("ID del certificado");
            $table->unsignedBigInteger("id_contra")->comment("ID del contratista");
            $table->foreign("id_contra")->references("id")->on("contractors");
            $table->unsignedBigInteger("nit_customer")->comment("Nit de la empresa usuario");
            $table->foreign("nit_customer")->references("id")->on("customers");
            $table->unsignedBigInteger("id_contract")->comment("Identificador del contrato");
            $table->foreign("id_contract")->references("id")->on("contracts");
            $table->date("date_expedition")->comment("Fecha de expedicion del certificado");
            $table->string("issue")->comment("Tema principal del proyecto");
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
        Schema::dropIfExists('certificates');
    }
}
