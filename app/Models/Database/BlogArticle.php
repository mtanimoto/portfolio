<?php

namespace App\Models\Database;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    protected $table = 'blog_article';

    public $timestamps = true;

    protected $fillable = [
        'blog_article_id',
        'title',
        'content_before_conversion',
        'content',
    ];

    public static function findById($id) {
        return BlogArticle::selectRaw("blog_article_id, title, content, content_before_conversion, strftime('%Y/%m/%d %H:%M', created_at, 'localtime') as created_at_jst")
                                ->where('blog_article_id', $id)
                                ->first();
    }
}
