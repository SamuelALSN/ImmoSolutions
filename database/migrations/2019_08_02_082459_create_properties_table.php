<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('area')->nullable();
            $table->dateTime('buildingdate')->nullable();
            $table->boolean('activated')->default(false);
            $table->decimal('latitudeposition')->nullable();
            $table->decimal('longitudeposition')->nullable();
            $table->string('adresse')->nullable();
            $table->decimal('street_number')->nullable();
            $table->string('route')->nullable();
            $table->string('locality')->nullable();
            $table->string('administrative_area_level_1')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            //
            $table->string('docfile')->nullable();
            // foreign key

           // $table->unsignedBigInteger('standing_id')->unsigned()->unique();
            $table->unsignedBigInteger('propertytype_id')->unsigned();
           // $table->unsignedBigInteger('subpropertyType_id')->unsigned()->unique();
            $table->unsignedBigInteger('user_id')->unsigned();
           // $table->unsignedBigInteger('country_id')->unsigned()->unique();
            //$table->unsignedBigInteger('state_id')->unsigned()->unique();
            //$table->unsignedBigInteger('city_id')->unsigned()->unique();
            // add constraint

//            $table->foreign('standing_id')->on('standing')->references('id')
//                ->onDelete('cascade');
            $table->foreign('propertyType_id')->on('propertytype')->references('id')
                ->onDelete('cascade');
//
//            $table->foreign('subpropertyType_id')->on('sub_propertytype')->references('id')
//                ->onDelete('cascade');

            $table->foreign('user_id')->on('users')->references('id')
                ->onDelete('cascade');
//            $table->foreign('country_id')->on('countries')->references('id')
//                ->onDelete('cascade');
//            $table->foreign('state_id')->on('states')->references('id')
//                ->onDelete('cascade');
//            $table->foreign('city_id')->on('cities')->references('id')
//                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
