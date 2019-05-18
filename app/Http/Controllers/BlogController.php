<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application\Article;
use App\Models\Application\Articles;

class BlogController extends Controller
{
    public function read($id) {
        $article = Article::find($id);
        return view('blogPage', ['article' => $article]);
    }

    public function readAll() {
        $articles = Article::findAll();
        return view('blogList', ['articles' => $articles]); 
    }

    public function edit($id) {
        $article = Article::find($id);
        return view('blogEdit', ['article' => $article]);
    }

    public function store(Request $request) {
        $form = $request->all();
        Article::store($form);
        return redirect('/articles');
    }

    public function delete(Request $request) {
        $form = $request->all();
        Article::delete($form['blog_article_id']);
        return redirect('/articles');
    }
}
