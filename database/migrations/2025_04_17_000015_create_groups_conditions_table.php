<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groups_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('condition_id')->constrained('conditions');
            $table->text('params');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups_conditions');
    }
};
