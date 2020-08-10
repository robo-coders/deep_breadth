<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('department_name')->nullable();
            $table->text('comments')->nullable();
            $table->integer('painStressLevelBefore');
            $table->integer('painStressLevelAfter');
            $table->integer('moodMoraleLevelBefore');
            $table->integer('moodMoraleLevelAfter');
            $table->integer('continuousWellness');
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
        Schema::dropIfExists('survey_datas');
    }
}
