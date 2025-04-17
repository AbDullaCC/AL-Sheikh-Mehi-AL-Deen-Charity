<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('job');
            $table->enum('gender', ['male', 'female']);
            $table->text('health_status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('partners');
    }
};
