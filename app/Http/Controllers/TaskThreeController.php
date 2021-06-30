<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class TaskThreeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(12);
        return view('fronts.task3.index', compact('articles'));
    }

    public function article_detail($id)
    {
        $article = Article::find($id);
        $articles = Article::latest()->take(7)->get();
        return view('fronts.task3.view', compact('article', 'articles'));
    }
}
