<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('client_id')->nullable(false)->unsigned();
            $table->decimal('subtotal',10,2)->nullable(true);
            $table->decimal('iva',10,2)->nullable(true);
            $table->decimal('total_amount',10,2)->nullable(true);
            $table->enum('status', array('Open' => "O", 'Closed' => "C", 'Review' => "R", 'Client Review' => "CR", 'Sold' => "S"))->default('O');
            $table->integer('admin_id')->nullable(false)->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('m_quotations');
    }
}
