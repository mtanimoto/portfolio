<?php

namespace App\Models\Application;

use App\Models\Database\BlogArticle;
use App\Models\Database\BlogArticleTag;

class Article
{
    public static function find($id) {
        $article       = BlogArticle::findById($id);
        $article->tags = BlogArticleTag::findById($id);
        return $article;
    }

    public static function findAll() {
        $articles = BlogArticle::orderBy('created_at', 'desc')->get();
        foreach ($articles as &$article) {
            $tags = BlogArticleTag::findById($article->blog_article_id);
            $article->tags = $tags;
        }
        return $articles;
    }

    public static function store($form) {
        $blogArticle = new BlogArticle;
        $parser = new \cebe\markdown\GithubMarkdown();
        $blog_article_id = array_key_exists('blog_article_id', $form) ? $form['blog_article_id'] : uniqid();
        $parameter = array(
            'blog_article_id'           => $blog_article_id,
            'title'                     => $form['title'],
            'content_before_conversion' => $form['content'],
            'content'                   => $parser->parse($form['content']),
        );
        $blogArticle->fill($parameter)->save();

        BlogArticleTag::where('blog_article_id', $blog_article_id)->delete();
        if (!empty($form['tags'])) {
            $tags = array_unique(explode(' ', $form['tags']));
            $seq = 1;
            foreach($tags as $tag) {
                $blogArticleTag = new BlogArticleTag;
                $parameter = array(
                    'blog_article_id' => $blog_article_id,
                    'seq'             => $seq++,
                    'tag'             => $tag,
                );
                $blogArticleTag->fill($parameter)->save();
            }
        }
    }

    public static function delete($id) {
        BlogArticleTag::where('blog_article_id', $id)->delete();
        BlogArticle::where('blog_article_id', $id)->delete();
    }
}
