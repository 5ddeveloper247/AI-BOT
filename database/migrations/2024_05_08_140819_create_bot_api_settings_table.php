<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bot_api_settings', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable()->comment('Client Id is the name (name alternatively called on authorizenet)');
            $table->string('client_secret')->nullable()->comment('Transaction key');
            $table->unsignedBigInteger('status')->nullable()->comment('Active(1)  inActive(0)');
            $table->string('type')->nullable()->comment('Sandbox or Live');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bot_api_settings');
    }
};
