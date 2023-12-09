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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('companies')->cascadeOnDelete();
            $table->uuid('plan_uuid');
            $table->string('name');
            $table->tinyInteger('introductory_rate');
            $table->string('introductory_period_text');
            $table->tinyInteger('acp_participation');
            $table->string('fixed_or_mobile');
            $table->integer('monthly_price');
            $table->tinyInteger('contract_required');
            $table->tinyInteger('government_taxes');
            $table->string('contract_terms');
            $table->integer('early_termination_fee');
            $table->integer('download_speed');
            $table->integer('download_speed_type');
            $table->integer('upload_speed');
            $table->integer('upload_speed_type');
            $table->integer('latency_in_ms');
            $table->integer('data_included');
            $table->integer('data_included_type');
            $table->integer('cents_per_additional_data');
            $table->integer('cents_per_additional_data_type');
            $table->integer('latency_in_ms');
            $table->string('customer_support');
            $table->string('network_management_policy_link');
            $table->string('privacy_policy_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
