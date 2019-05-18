<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_article', function (Blueprint $table) {
            $table->char('blog_article_id', 13);
            $table->string('title')->nullable();
            $table->text('content_before_conversion')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            $table->primary(['blog_article_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_article');
    }
}
