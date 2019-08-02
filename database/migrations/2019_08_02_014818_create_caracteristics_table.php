<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propertyType_id')->unsigned()->index();
            $table->foreign('propertyType_id')->references('id')->on('propertyType')
                    ->onDelete('cascade');
            $table->string('caracteristics_name');
            $table->string('caracteristics_number');


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
        Schema::dropIfExists('caracteristics');
    }
}
