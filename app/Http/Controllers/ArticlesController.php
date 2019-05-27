<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Http\UploadedFile;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::where('created_by', \Auth::user()->id)
            ->orderBy('created_at', 'desc')->get(['id', 'title', 'created_at']);
        return view('backend.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('backend.articles.create');
    }

    public function store(Request $request)
    {
        if ($request->has('photos')) {
            foreach ($request->file('photos') as $photo) {
                if ($photo instanceof UploadedFile && $photo->isValid()) {
                    $photo->storeAs('/',$photo->getClientOriginalName());
                }
//                var_dump($photo);
            }
        }
        dd('finis');
        Article::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'created_by' => \Auth::user()->id,

        ]);
        return redirect()->route('articles.index');
    }

    public function show($id)
    {

    }

    public function edit(Article $article)
    {
        return view('backend.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update([
            'title' => $request['title'],
            'body' => $request['body'],
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('articles.index');
    }
}
