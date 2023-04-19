<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_id')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->boolean('gender')->default(false);
            $table->string('address')->nullable();
            $table->string('service')->nullable();
            $table->dateTime('time')->nullable();
            $table->text('note')->nullable();
            $table->enum('status', \App\Enums\StatusEnum::toArray())->default(\App\Enums\StatusEnum::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
