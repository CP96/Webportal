<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Type');
            $table->integer('Lenght');
            $table->float('Rental Price');
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
        Schema::dropIfExists('skis');
    }
}
