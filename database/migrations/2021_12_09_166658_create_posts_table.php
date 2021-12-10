<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('post_id')->nullable()->constrained('posts');
            $table->string('author')->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('sub_category_id')->nullable()->constrained('sub_categories');
            $table->unsignedBigInteger('total_likes')->default(0);
            $table->unsignedBigInteger('total_comments')->default(0);
            $table->unsignedBigInteger('total_shares')->default(0);
            $table->unsignedBigInteger('total_views')->default(0);
            $table->string('uuid', 50)->unique();
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
        Schema::dropIfExists('posts');
    }
}
