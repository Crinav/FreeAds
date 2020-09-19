<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class ArticleController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        return view('article/index', [
            'article' => Article::all()->where('id_member', $id),
            'id' => $id,
            'photo' => \App\Photo::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        return view('article/create', [
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = $request->user()->article()->create([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'price' => $request->input('price'),
            'categorie' => $request->input('categorie')
        ]);
        $this->validate($request, [
            'img' => 'bail|',
        ]);
        $photo = new \App\Photo();
        $photo->create([
            'img' =>  $request->input('img0'),
            'id' => $article->id,
        ]);
        if($request->input('img1'))
        {
        $photo->create([
                    'img' =>  $request->input('img1'),
                    'id' => $article->id,
                ]);
        }

        if($request->input('img2'))
        {
        $photo->create([
                    'img' =>  $request->input('img2'),
                    'id' => $article->id,
                ]);
        }
        if($request->input('img3'))
        {
        $photo->create([
                    'img' =>  $request->input('img3'),
                    'id' => $article->id,
                ]);
        }
        return back()->with(['status' => 'Image téléversé correctement !']);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id_article)
    {
        $id = Auth::id();
        $article = Article::findOrFail($id_article);
        $photo = \App\Photo::all()->where('id', $id_article);
        return  view('article/show', [
            'article' => $article,
            'id' => $id,
            'photo' => $photo
        ]);
    }

    public function showOne($id_article)
    {
        $id = Auth::id();
        $article = Article::findOrFail($id_article);
        $photo = \App\Photo::all()->where('id', $id_article);
        return  view('article/showOne', [
            'article' => $article,
            'id' => $id,
            'photo' => $photo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id_article)
    {
        $id = Auth::id();
        return view('article/edit', [
            'article' => $id_article,
            'id' => $id,
        ]);
        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id_article)
    {
        $id = Auth::id();
        $photo = new \App\Photo;
        $photo->where('id',$id_article)->delete();
           echo '<pre>';

        $article = Article::findOrFail($id_article);
        $photo = new \App\Photo;

        var_dump($photo);
        $article->update([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'price' => $request->input('price'),
            'categorie' => $request->input('categorie')
        ]);

        $photo->create([
            'img' =>  $request->input('img0'),
            'id' => $article->id,
        ]);
        if($request->input('img1'))
        {
        $photo->create([
                    'img' =>  $request->input('img1'),
                    'id' => $article->id,
                ]);
        }

        if($request->input('img2'))
        {
        $photo->create([
                    'img' =>  $request->input('img2'),
                    'id' => $article->id,
                ]);
        }
        if($request->input('img3'))
        {
        $photo->create([
                    'img' =>  $request->input('img3'),
                    'id' => $article->id,
                ]);
        }
        return redirect()->route('art.show', [$article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $article = new Article;
        $article->findOrFail($id)->delete();
        $photo = new \App\Photo;
        $photo->findOrFail($id)->delete();
        return redirect()->route('art.index');
    }

    public function search()
    {
        return view('art.search ');
    }

    public function found(Request $request)
    {

    }
}
