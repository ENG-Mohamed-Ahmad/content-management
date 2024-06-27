<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\ArticleService;
use App\Http\Requests\StoreArticleRequest;
use App\Traits\GeneralTrait;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    use GeneralTrait;

    protected $imageService;
    protected $articleService;

    public function __construct(ImageService $imageService, ArticleService $articleService)
    {
        $this->imageService = $imageService;
        $this->articleService = $articleService;
    }

    // store article
    public function store(StoreArticleRequest $request)
    {        
        $article = $this->articleService->createArticle($request);

        $this->imageService->storeImages($request, $article);
        
        if ($request->ajax()) {
            return $this->updatedResponseData($article);
        }

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }
    
    // update article
    public function update(StoreArticleRequest $request, Article $article)
    {        
        $article = $this->articleService->updateArticle($request, $article);

        $this->imageService->updateImages($request, $article);

        if ($request->ajax()) {
            return $this->updatedResponseData($article);
        }
        return redirect()->route('articles.index')->with('success', 'Article updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }
        /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('images')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
}