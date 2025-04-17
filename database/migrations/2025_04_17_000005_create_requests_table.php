<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_type_id')->constrained('requests_types');
            $table->text('owner_type');
            $table->integer('owner_id');
            $table->enum('status', ['accepted', 'rejected'])->nullable();
            $table->foreignId('meet_id')->constrained('meets');
            $table->timestamp('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
