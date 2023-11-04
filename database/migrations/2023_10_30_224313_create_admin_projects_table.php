<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del administrador del proyecto');
            $table->string('number_phone')->comment('Numero de telefono del administrador del proyecto');
            $table->string('address')->comment('Direccion del administrador del proyecto');
            $table->string('email')->comment('Email del administrador del proyecto');
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
        Schema::dropIfExists('admin_projects');
    }
}
