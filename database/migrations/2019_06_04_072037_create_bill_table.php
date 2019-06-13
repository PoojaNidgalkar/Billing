<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('item name');
            $table->text('description');
            $table->bigInteger('qty');
            $table->bigInteger('price');
            $table->bigInteger('tax');
            $table->bigInteger('total');
            $table->unsignedBigInteger('Bid');
            $table->foreign('Bid')->references('id')->on('billlist');
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
        Schema::dropIfExists('bill');
    }
}
