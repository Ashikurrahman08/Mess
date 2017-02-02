<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Additional', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('extra_item_id')->unsigned();
             $table->dateTime('date');
            $table->string('extra_amount');
            $table->string('total'); 
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
        Schema::dropIfExists('Additional');
    }
}
