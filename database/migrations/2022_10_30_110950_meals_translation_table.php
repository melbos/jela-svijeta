<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MealsTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'meal_translations',
            function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('meal_id')->nullable();
                $table->string('title');
                $table->string('locale')->index();

                $table->unique(['meal_id', 'locale']);
                $table->foreign('meal_id')->references('id')->on('meals');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
