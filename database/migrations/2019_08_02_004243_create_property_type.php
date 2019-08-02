<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertyType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propertyType_name');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sub_propertyType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propertyType_id')->unsigned()->index();
            $table->foreign('propertyType_id')->references('id')->on('propertyType');
            $table->string('sub_propertyType_name');
            $table->softDeletes();
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
        Schema::dropIfExists('property_type');
    }
}
