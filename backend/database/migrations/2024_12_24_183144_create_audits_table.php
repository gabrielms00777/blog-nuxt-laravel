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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->morphs('auditable');
            $table->string('action'); 
            // $table->string('model'); 
            // $table->unsignedBigInteger('model_id'); 
            // $table->json('changes')->nullable(); 
            $table->json('old_data')->nullable(); 
            $table->json('new_data')->nullable();
            $table->ipAddress('ip_address')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
