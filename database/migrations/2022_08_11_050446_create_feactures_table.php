<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feactures', function (Blueprint $table) {
            $table->id('feacture_id');
            $table->string('cleaning_fee');
            $table->string('sleeping_situation');
            $table->string('address');
            $table->string('area');
            $table->string('state');
            $table->string('country');
            $table->string('zip');
            $table->string('property_id');
            $table->string('room');
            $table->string('bathrooms');
            $table->string('property_size');
            $table->string('bedrooms');
            $table->string('please_note');
            $table->string('amenities');
            $table->string('terms');
            $table->bigInteger('title_id')->unsigned();
            $table->foreign('title_id')->references('title_id')->on('titles');
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
        Schema::dropIfExists('feactures');
    }
}
