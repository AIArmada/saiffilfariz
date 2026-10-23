<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('dek');
            $table->longText('body');
            $table->string('pillar')->index();
            $table->string('format')->index();
            $table->string('audience')->index();
            $table->unsignedSmallInteger('reading_time')->default(4);
            $table->string('image')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
