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
            $table->unsignedBigInteger('standing_id')->unsigned()->nullable();
            $table->unsignedBigInteger('propertytype_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('standing_id')->on('standing')->references('id')
                ->onDelete('cascade');
            $table->foreign('propertyType_id')->on('propertytype')->references('id')
                ->onDelete('cascade');
            $table->foreign('user_id')->on('users')->references('id')
                ->onDelete('cascade');
            // info caracteristiques
            $table->integer('rooms')->nullable();
            $table->integer('bathRooms')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('swimmingpool')->nullable();
            $table->string('meuble')->nullable();
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
