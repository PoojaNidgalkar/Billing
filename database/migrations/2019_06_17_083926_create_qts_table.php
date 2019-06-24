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
            
            $table->bigIncrements('Qid');
            $table->string('Itemname',255);
            $table->bigInteger('Qty');
            $table->bigInteger('Price');
            $table->bigInteger('Total');
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
