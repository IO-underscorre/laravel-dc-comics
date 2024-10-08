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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 125);
            $table->string('series', 125);
            $table->string('slug', 255)->unique();
            $table->smallInteger('issue_number')->unsigned();
            $table->text('summary')->nullable();
            $table->string('cover_image', 510)->nullable();
            $table->date('release_date')->nullable();
            $table->smallInteger('page_count')->unsigned()->nullable();
            $table->decimal('price', 8, 2)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
