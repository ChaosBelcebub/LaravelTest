<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index')->with('articles', $articles);
    }

    /**
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        dd($article->published_at);

        return view('articles.show')->with('article', $article);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CreateArticleRequest $request)
    {
        Article::create(Request::all());

        return redirect('articles');
    }
}
