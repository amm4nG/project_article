<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest('created_at')->get();
        return view('admin.home', compact(['articles']));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.detail', compact(['article']));
    }
}
