<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('uncles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->enum('from', ['father', 'mother']);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('job');
            $table->text('provided_aid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('uncles');
    }
};
