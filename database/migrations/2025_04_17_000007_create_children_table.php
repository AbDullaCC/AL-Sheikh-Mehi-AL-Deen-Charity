<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->string('name');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->boolean('is_alive');
            $table->string('partner_name')->nullable();
            $table->text('residence_place');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('children');
    }
};
