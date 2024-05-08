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
        Schema::create('payment_api_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('Client Id is the name (name alternatively called on authorizenet)');
            $table->string('transaction_key')->nullable()->comment('Transaction key');
            $table->unsignedBigInteger('status')->nullable()->comment('Active or inActive');
            $table->string('type')->nullable()->comment('Sandbox or Live');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_api_settings');
    }
};
