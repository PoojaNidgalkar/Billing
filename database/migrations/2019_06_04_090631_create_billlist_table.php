<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilllistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billlist', function (Blueprint $table) {
            $table->bigIncrements('Bid');
            $table->bigInteger('Grandtotal');
            $table->unsignedBigInteger('Cid');
            $table->foreign('Cid')->references('id')->on('clients');
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
        Schema::dropIfExists('billlist');
    }
}
