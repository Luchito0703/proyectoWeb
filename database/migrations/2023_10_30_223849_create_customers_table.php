<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('');
            $table->string('dni_customer')->comment('Dni del usuario');
            $table->string('name_customer')->comment('Nombre del usuario');
            $table->string('number_customer')->comment('Telefono del usuario');
            $table->string('address_customer')->comment('Direccion del usuario');
            $table->string('email_customer')->comment('Email del usuario');
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
        Schema::dropIfExists('customers');
    }
}
