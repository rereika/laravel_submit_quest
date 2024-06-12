<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('conduit.home', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('conduit.article', ['article' => $article]);
    }
}
