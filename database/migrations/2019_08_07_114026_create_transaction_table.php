<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('property_id')->unsigned();
            $table->foreign('property_id')
                ->on('property')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('transactiontype_id')->unsigned();

            $table->foreign('transactiontype_id')
                ->on('transaction_type')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->date('beginDate')->nullable();
            $table->date('endDate')->nullable();
            $table->date('visiteDate')->nullable();
            $table->integer('ammount')->nullable();
            $table->decimal('majoration')->nullable();
            $table->integer('intervalMajoration')->nullable();
            $table->boolean('activated')->default(false);
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
        Schema::dropIfExists('transaction');
    }
}
