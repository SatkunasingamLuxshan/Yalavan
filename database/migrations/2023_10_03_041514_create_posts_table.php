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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->text('description');
            $table->text('short_description');
            $table->integer('auth_id');
            $table->date('publish_date');
            $table->dateTime('end_publish');
            $table->boolean('is_publish');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->string('future_img_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
