<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('bookings_id');
            $table->text('name');
            $table->date('checkin');
            $table->date('checkout');
            $table->text('guest');
            $table->bigInteger('feacture_id')->unsigned();
            $table->foreign('feacture_id')->references('feacture_id')->on('feactures');
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
        Schema::dropIfExists('bookings');
    }
}
