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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('request_id')->nullable();

            $table->string('status')->default('In progress');

            $table->foreign('client_id')->on('users')->references('id')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('admin_id')->on('users')->references('id')
                ->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('request_id')->on('recommendation_requests')->references('id')
                ->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
