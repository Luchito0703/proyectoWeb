<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_bosses', function (Blueprint $table) {
            $table->id("id")->comment("Id del jefe");
            $table->string("name")->comment("nombre del jefe");
            $table->integer("number_phone")->comment("Numero del jefe");
            $table->string("address")->comment("Direccion del jefe");
            $table->string("email")->comment("Email del jefe");
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
        Schema::dropIfExists('admin_bosses');
    }
}
