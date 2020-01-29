<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkibootsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skiboots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Type');
            $table->float('Mondo Point');
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
        Schema::dropIfExists('skiboots');
    }
}
