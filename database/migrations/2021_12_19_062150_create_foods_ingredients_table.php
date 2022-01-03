<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_ingredient', function (Blueprint $table) {
            $table->id();
            $table->text('food_id');
            $table->text('ingredient_id');
            $table->double('quantity');
            $table->foreign('food_id', 'fk_food_ingredient_ref_food_on_food_id')->references('id')->on('food');
            $table->foreign('ingredient_id', 'fk_food_ingredient_ref_ingredient_on_ingredient_id')->references('id')->on('ingredient');
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
        Schema::dropIfExists('food_ingredient');
    }
}
