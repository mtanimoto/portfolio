<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_article_tag', function (Blueprint $table) {
            $table->char('blog_article_id', 13);
            $table->smallInteger('seq');
            $table->string('tag');
            $table->timestamps();

            $table->primary(['blog_article_id', 'seq']);
            $table->foreign('blog_article_id')->references('blog_article_id')->on('blog_article');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_article_tag');
    }
}
