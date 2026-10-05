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
        Schema::create('tag_todo', function (Blueprint $table) {
            $table->id();

            // Foreign keys targeting your tasks and tags tables
            // constrained() ensures referential integrity; cascadeOnDelete removes the pivot row if a task/tag is deleted
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->foreignId('todo_id')->constrained()->cascadeOnDelete();

            // Prevents assigning the exact same tag to the same task multiple times
            $table->unique(['tag_id', 'todo_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_todo');
    }
};
