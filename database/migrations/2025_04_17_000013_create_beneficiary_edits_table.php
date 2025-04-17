<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('beneficiary_edits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries');
            $table->text('fields')->comment('will be JSON');
            $table->foreignId('request_id')->constrained('requests');
            $table->enum('request_status', ['accepted', 'rejected'])->nullable();
            $table->date('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('beneficiary_edits');
    }
};
