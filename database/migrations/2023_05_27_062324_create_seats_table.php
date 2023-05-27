<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('showroom_id')->constrained();
            $table->unsignedBigInteger('seat_types_id')->constrained();
            $table->integer('seat_number');
            $table->foreign('showroom_id')->references('id')->on('showrooms')->onDelete('cascade');
            $table->foreign('seat_types_id')->references('id')->on('seat_types')->onDelete('cascade');
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
        Schema::dropIfExists('seats');
    }
}
