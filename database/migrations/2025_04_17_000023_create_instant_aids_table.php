<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('instant_aids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->bigInteger('amount');
            $table->text('reason');
            $table->foreignId('request_id')->constrained('requests');
            $table->enum('request_status', ['accepted', 'rejected', 'pending']);
            $table->date('received_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instant_aids');
    }
};
