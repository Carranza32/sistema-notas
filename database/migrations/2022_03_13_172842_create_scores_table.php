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
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('student_id')->constrained();
            $table->foreignId('subject_id')->constrained();

            $table->decimal('period1_score1', 10, 2)->nullable();
            $table->decimal('period1_score2', 10, 2)->nullable();
            $table->decimal('period1_score3', 10, 2)->nullable();

            $table->decimal('period2_score1', 10, 2)->nullable();
            $table->decimal('period2_score2', 10, 2)->nullable();
            $table->decimal('period2_score3', 10, 2)->nullable();

            $table->decimal('period3_score1', 10, 2)->nullable();
            $table->decimal('period3_score2', 10, 2)->nullable();
            $table->decimal('period3_score3', 10, 2)->nullable();

            $table->decimal('final_average', 10, 2)->nullable();
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
        Schema::dropIfExists('scores');
    }
};
