<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blocked_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->text('reason');
            $table->foreignId('request_id')->constrained('requests');
            $table->enum('request_status', ['accepted', 'rejected']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('blocked_beneficiaries');
    }
};
