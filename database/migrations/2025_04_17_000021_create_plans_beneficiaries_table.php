<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('plans_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans');
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->boolean('is_turn');
            $table->date('turn_until');
            $table->date('received_at')->nullable();
            $table->integer('order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans_beneficiaries');
    }
};
