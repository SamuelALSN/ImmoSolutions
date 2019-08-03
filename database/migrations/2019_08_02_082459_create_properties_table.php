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
            $table->string('property_name');
            $table->string('adresse')->nullable();
            $table->string('location')->nullable();
            $table->integer('area');
            $table->dateTime('buildingdate')->nullable();
            $table->boolean('activated')->default(false);
            $table->decimal('latitudepostion')->nullable();
            $table->decimal('longitudeposition')->nullable();
            // foreign key

            $table->unsignedBigInteger('standing_id')->unsigned()->unique();
            $table->unsignedBigInteger('propertytype_id')->unsigned()->unique();
            $table->unsignedBigInteger('subpropertyType_id')->unsigned()->unique();
            $table->unsignedBigInteger('user_id')->unsigned()->unique();
            $table->unsignedBigInteger('country_id')->unsigned()->unique();
            $table->unsignedBigInteger('state_id')->unsigned()->unique();
            $table->unsignedBigInteger('city_id')->unsigned()->unique();
            // add constraint

            $table->foreign('standing_id')->on('standing')->references('id')
                ->onDelete('cascade');
            $table->foreign('propertyType_id')->on('propertytype')->references('id')
                ->onDelete('cascade');

            $table->foreign('subpropertyType_id')->on('sub_propertytype')->references('id')
                ->onDelete('cascade');

            $table->foreign('user_id')->on('users')->references('id')
                ->onDelete('cascade');
            $table->foreign('country_id')->on('countries')->references('id')
                ->onDelete('cascade');
            $table->foreign('state_id')->on('states')->references('id')
                ->onDelete('cascade');
            $table->foreign('city_id')->on('cities')->references('id')
                ->onDelete('cascade');
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
