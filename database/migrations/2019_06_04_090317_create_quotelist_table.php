<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotelist', function (Blueprint $table) {
            $table->bigIncrements('Qid');
            $table->string('name');
            $table->bigInteger('grand total');
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
        Schema::dropIfExists('quotelist');
    }
}
