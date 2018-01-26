<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('m_quotation_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->decimal('qty',10,2);
            $table->decimal('unit_price',10,2);
            $table->decimal('subtotal',10,2);
            $table->decimal('iva',10,2);
            $table->foreign('m_quotation_id')->references('id')->on('m_quotations');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('d_quotations');
    }
}
