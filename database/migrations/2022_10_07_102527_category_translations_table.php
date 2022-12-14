<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'category_translations',
            function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('category_id')->nullable();
                $table->string('title');
                $table->string('locale')->index();

                $table->unique(['category_id', 'locale']);
                $table->foreign('category_id')->references('id')->on('categories');
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
