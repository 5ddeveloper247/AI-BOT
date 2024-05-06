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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // Foreign key constraints
            $table->unsignedBigInteger('user_id');


            $table->unsignedBigInteger('plan_id');

            $table->unsignedBigInteger('membership_id')->nullable();

            // Amount and status as unsigned integers
            $table->unsignedInteger('amount');
            $table->unsignedInteger('status');

            // Payment gateway and transaction ID as text
            $table->text('payment_gateway');
            $table->text('transaction_id');
            $table->text('auth_code');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
