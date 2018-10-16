<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getByCategory()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->get();

        return ArticleResource::collection($articles);
    }

    public function getCategories()
    {
        $articles = Category::all();

        return CategoryResource::collection($articles);
    }

    public function getArticle($id)
    {
        $article = Article::find($id);

        return response()->json($article);
    }

    public function getFirstByCategory($id)
    {
        $articles = Article::with('category')->where('category_id',$id)->orderBy('created_at', 'desc')->first();

        return $articles;
    }

    public function postCategory(Request $request)
    {
        $category = Category::create([
           'category' => $request->category
        ]);

        return $request;
    }

    public function postArticle(Request $request)
    {
        $article = Article::create([
            'category_id' => (int)$request->category,
            'content' => $request->article,
            'image' => 'display: block; background-image: url(/cover_images/'. $request->image .');',
            'img' => '/cover_images/' . $request->image,
            'title' => $request->title,
        ]);

        return $article;
    }

    public function postImage(Request $request)
    {
        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time().'.'.$request->file->getClientOriginalExtension();

        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->file->move(public_path('cover_images'), $photoName);

        return $photoName;
    }

}
