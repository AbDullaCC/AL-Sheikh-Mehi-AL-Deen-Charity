<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('national_number', 50)->unique();
            $table->string('job');
            $table->text('health_status');
            $table->string('phone_number', 20);
            $table->string('mobile_number', 20);
            $table->text('address');
            $table->enum('residence_type', ['rent', 'own', 'host', 'borrow']);
            $table->integer('residence_document_id');
            $table->bigInteger('monthly_income');
            $table->text('case_description');
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('request_id')->constrained('requests');
            $table->enum('request_status', ['accepted', 'rejected', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
};
