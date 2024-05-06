<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('plan_name_description');
            $table->string('plan_tittle');
            $table->string('plan_tittle_description');
            $table->string('plan_price');
            $table->string('plan_type');
            $table->integer('duration')->comment('Duration of the plan in days')->nullable();
            $table->string('input_word_limit');
            $table->string('output_word_limit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
