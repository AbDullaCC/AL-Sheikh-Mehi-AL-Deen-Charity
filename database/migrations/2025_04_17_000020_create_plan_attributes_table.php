<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('plan_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans');
            $table->foreignId('attribute_id')->constrained('attributes');
            $table->integer('weight');
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_attributes');
    }
};
