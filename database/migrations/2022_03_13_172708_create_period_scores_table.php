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
        Schema::create('period_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('score1', 3, 2);
            $table->decimal('score2', 3, 2);
            $table->decimal('score3', 3, 2);
            $table->decimal('score4', 3, 2)->nullable();
            $table->decimal('average', 3, 2)->nullable();
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
        Schema::dropIfExists('period_scores');
    }
};
