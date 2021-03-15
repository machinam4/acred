<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('type');
            $table->text('acquisition');
            $table->integer('price');
            $table->integer('size');
            $table->text('furnishing');
            $table->longText('description');
            $table->text('address');
            $table->text('county');
            $table->text('neighborhood');
            $table->text('category');
            $table->text('googlelocation');
            $table->text('streetview');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('parking');
            $table->text('floorplan');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');
            $table->text('image5');
            $table->text('video');
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
        Schema::dropIfExists('properties');
    }
}
