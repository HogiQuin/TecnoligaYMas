<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('username')->nullable(false);
            $table->string('password')->nullable(false);
            $table->enum('role',array('Root' => "R", 'Normal' => "N"))->default('N')->nullable(false);
            $table->enum('status',array('Pendiente' => "P", 'Activo' => "A", 'Desactivado' => "D"))->default('P')->nullable(false);
            $table->string('email')->nullable(true);
            $table->string('email_password')->nullable(true);
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
        Schema::dropIfExists('admins');
    }
}
