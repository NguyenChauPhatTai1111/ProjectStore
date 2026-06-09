<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favorite_music', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('track_id');
            $table->string('title');
            $table->string('artist')->nullable();
            $table->string('cover')->nullable();
            $table->text('preview')->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'track_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favorite_music');
    }
};