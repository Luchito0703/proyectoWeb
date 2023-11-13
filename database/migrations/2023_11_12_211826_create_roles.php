<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role1 = Role::create(['name'=>'admin_boss']);
        $role2 = Role::create(['name'=>'admin_projects']);
        $role3 = Role::create(['name'=>'contractor']);
        $role4 = Role::create(['name'=>'customer']);
        $user = User::find(1);
        $user->assignRole($role1);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         
    }
}
