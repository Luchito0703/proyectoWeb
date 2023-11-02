<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_contra")->comment("ID del contratista");
            $table->foreign("id_contra")->references("id")->on("contractors");
            $table->unsignedBigInteger("dni_admin_proj")->comment("Cedula del administrador del proyecto");
            $table->foreign("dni_admin_proj")->references("id")->on("admin_projects");
            $table->unsignedBigInteger("nit_customer")->comment("Nit de la empresa usuario");
            $table->foreign("nit_customer")->references("id")->on("customers");
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
        Schema::dropIfExists('contracts');
    }
}
