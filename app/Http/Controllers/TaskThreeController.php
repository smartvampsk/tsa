<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class TaskThreeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(12);

        $articlesWithComment = Article::whereHas('comments')->latest()->get();

        $totalArticles = Article::all()->count();

        return view('fronts.task3.index', compact('articles', 'articlesWithComment', 'totalArticles'));
    }

    public function article_detail($id)
    {
        $article = Article::with(['comments.user'])->find($id);

        $articles = Article::latest()->take(7)->get();

        $comments = $article->comments;

        $articlesByAuthor = Comment::latest()->where('user_id', $article->user_id)->pluck('commentable_id');

        return view('fronts.task3.view', compact('article', 'articles', 'comments', 'articlesByAuthor'));
    }
}
