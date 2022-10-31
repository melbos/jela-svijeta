<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'description_translations',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('description');
                $table->unsignedBigInteger('description_id');
                $table->string('locale')->index();

                $table->unique(['description_id', 'locale']);
                $table->foreign('description_id')->references('id')->on('descriptions');
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
        Schema::dropIfExists('description_translation');
    }
}
