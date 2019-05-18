<?php

namespace App\Models\Database;

use Illuminate\Database\Eloquent\Model;

class BlogArticleTag extends Model
{
    protected $table = 'blog_article_tag';

    public $timestamps = true;
    
    protected $fillable = [
        'blog_article_id',
        'seq',
        'tag',
    ];

    public static function findById($id) {
        return BlogArticleTag::where('blog_article_id', $id)
                                ->orderBy('seq', 'asc')
                                ->get();
    }
}
