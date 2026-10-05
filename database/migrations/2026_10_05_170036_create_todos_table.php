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
        Schema::create('todos', function (Blueprint $table) {

            // Create the primary key field for the table (id)
            $table->id();

            // Data columns in the table
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('completed')->default(false);

            // Creates a BIGINT unsigned column and adds the FK constraint to users.id
            $table->foreignId('user_id')->constrained();

            // Adds in the created_at and updated_at fields for timestamp tracking
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // To undo the migration, simply drop thetable.
        Schema::dropIfExists('todos');
    }
};
