<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->id("Id")->comment("Id del contratista");
            $table->string("id_contractor")->comment("id del contratista");
            $table->string("name_contractor")->comment("Nombre del contratista");
            $table->string("number_phone")->comment("Numero de telefono del contratista");
            $table->string("address_contractor")->comment("Direccion del contratista");
            $table->string("dni_contractor")->comment("Cedula del contratista");
            $table->string("email_contractor")->comment("Email del contratista");
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
        Schema::dropIfExists('contractors');
    }
}
