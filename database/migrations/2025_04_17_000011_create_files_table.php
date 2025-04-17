<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path')->unique();
            $table->string('type')->unique();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
};
