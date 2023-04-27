<?php

namespace App\Http\Controllers;

use App\Models\Article; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin.new-article');
    }

    public function store(Request $request)
    {
        // validasi inputan
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['mimes:png,jpg']
        ]); 
        $path = '';
        // cek apakah gambarnya ada
        if($request->hasFile('image')){

            // ambil nama file yang asli
            // $fileName = $request->file('image')->getClientOriginalName();
            // upload image dengan nama file sesuai dengan yang asli
            // $request->file('image')->storeAs('public/images/'.$fileName);

            // upload image dengan nama file yang dihash / string random
            $path = $request->file('image')->store('public/images');  
        }
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->image = str_replace('public/', '', $path); // hilangkan kata public
        $article->save();
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id); 
        if($article->image != '' || $article->image != Null){ 
            Storage::delete('public/'.$article->image);
        }
        $article->delete();
        return redirect()->route('home.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['mimes:png,jpg']
        ]);
        $article = Article::find($id);
        if ($request->hasFile('image')) {
            if ($article->image != '' || $article->image != Null) {
                // hapus gambar lama
                Storage::delete('public/'.$article->image);
                // masukkan gambar baru
                $path = $request->file('image')->store('public/images');
                // masukkan nama file gambar baru kedalam database
                $article->image = str_replace('public/', '', $path);
            }
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->update();
        return back();
    }
}
