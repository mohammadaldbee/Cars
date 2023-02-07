<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('num_of_car');
            $table->foreignId('cat_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->decimal('car_price');
            $table->text('car_description');
            // $table->string('name');
            $table->string('car_image')->nullable();
            $table->string('car_image1')->nullable();
            $table->string('car_image2')->nullable();
            $table->string('status')->default('1');
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
        Schema::dropIfExists('cars');
    }
};
