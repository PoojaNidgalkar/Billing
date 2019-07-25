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

       
            $table->Increments('Qid')->nullable();
            $table->string('item_name')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('tax')->nullable();
            $table->bigInteger('total')->nullable();
            $table->bigInteger('Grandtotal')->nullable();

            $table->integer('client_id')->unsigned();
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
