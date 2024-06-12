<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        // 指定されたIDの記事を取得
        $article = Article::findOrFail($id);

        // 取得した記事データをビューに渡す
        return view('conduit.article', ['article' => $article]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'tags' => 'required|string|max:255',
        ]);

        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'tags' => $request->tags,
        ]);

        $articles = Article::all();
        return redirect()->route('home')->with('articles', $articles);
    }

    public function index(){
        //Articleモデルを使用して、全ての記事を取得する
        $articles = Article::all();

        //取得した記事をビューに私て表示する
        return view('conduit.home', ['articles' => $articles]);
    }
}
