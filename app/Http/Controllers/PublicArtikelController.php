<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicArtikelController extends Controller
{
    public function index()
    {
        $articles = Article::latest('created_at')->get();
        return view('articles', compact(['articles']));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('detail', compact(['article']));
    }
}
