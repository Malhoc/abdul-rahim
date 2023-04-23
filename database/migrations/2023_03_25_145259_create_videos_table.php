<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('author_name')->nullable();
            $table->string('book')->nullable();;
            $table->longText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->string('narrated_by')->nullable();
            $table->string('slug')->unique();
            $table->string('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('files')->nullable();
            $table->longText('meta_tag_title')->nullable();
            $table->longText('meta_tag_keywords')->nullable();
            $table->longText('meta_tag_description')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->string('video_alt')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('video_category_id')->nullable();
            $table->foreign('video_category_id')->references('id')->on('video_categories')->onDelete('set null');
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->softDeletes();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
