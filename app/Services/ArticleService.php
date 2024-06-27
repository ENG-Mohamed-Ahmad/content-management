<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;

class ArticleService
{

    // create new article
    public function createArticle(Request $request)
    {
        $inputs = $request->only('title', 'content');
        $article = Article::create($inputs);

        return $article;
    }


    // update exist article
    public function updateArticle(Request $request, Article $article)
    {
        $inputs = $request->only('title', 'content');
        $article->update($inputs);

        return $article;
    }
}