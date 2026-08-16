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
        Schema::create('tblinvoices', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('slug')->nullable();
            $table->string('number')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->date('invoice_date');
            $table->string('currency')->nullable();
            $table->string('currency_rate')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('tax_name')->nullable();
            $table->string('tax_rate')->nullable();
            $table->string('round_off')->nullable();
            $table->string('round_off_ledger')->nullable();
            $table->string('additional_charges')->nullable();
            $table->string('additional_charges_ledger')->nullable();
            $table->decimal('amount', 15, 2)->default(0);
            $table->string('ref_no')->nullable();
            $table->string('ledger_based')->nullable();
            $table->string('acc_ledger')->nullable();
            $table->string('status')->default(0);
            $table->string('approval')->default('Pending');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblinvoices');
    }
};
