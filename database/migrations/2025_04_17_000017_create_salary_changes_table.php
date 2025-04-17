<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('salary_changes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('groups');
            $table->integer('new_salary');
            $table->enum('type', ['once', 'permanent']);
            $table->date('month');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salary_changes');
    }
};
