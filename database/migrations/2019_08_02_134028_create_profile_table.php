<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id')->unsigned()->unique();
            $table->foreign('user_id')->on('users')->references('id')
                ->onDelete('cascade');
            $table->string('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('phone2')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('avatar_status')->default(false);
            $table->string('facebook_acount')->nullable();
            $table->string('gmail_account')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_account2')->nullable();
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
        Schema::dropIfExists('profile');
    }
}
