<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;

class AddSlugToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function ($table) {
            $table->string('slug')->nullable()->unique();
        });

        foreach(Post::all() as $post){
            $post->slug = Post::slug($post->title);
            $post->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
