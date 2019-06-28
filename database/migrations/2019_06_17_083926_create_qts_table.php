<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qts', function (Blueprint $table) {
            $table->Increments('Qid');
            $table->string('Itemname');
            $table->bigInteger('Qty');
            $table->bigInteger('Price');
            $table->bigInteger('Tax');
            $table->bigInteger('Total');
            $table->bigInteger('Grandtotal');         
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('Cid')->on('client');
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
        Schema::dropIfExists('qts');
    }
}
