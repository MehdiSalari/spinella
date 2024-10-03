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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('image_primary');
            $table->string('title');
            $table->string('image_left')->nullable();
            $table->string('image_right')->nullable();
            $table->text('upper_text');
            $table->string('image_mid')->nullable();
            $table->text('mid_text')->nullable();
            $table->text('lower_text')->nullable();
            $table->string('slug');
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
