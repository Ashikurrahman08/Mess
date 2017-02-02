<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserstableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userstable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 10);
            $table->string('last_name', 10);
            $table->string('father_name', 10);
            $table->string('mother_name', 10);
            $table->integer('nid')->unique();;
            $table->string('email')->unique();
            $table->integer('image');
            $table->integer('address');
            $table->rememberToken();
            $table->integer('mobile_numbers');
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
        Schema::dropIfExists('userstable');
    }
}
