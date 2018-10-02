<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getByCategory($id)
    {
        $articles = Article::where('category_id',$id)
            ->skip(1)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return ArticleResource::collection($articles);
    }

    public function getFirstByCategory($id)
    {
        $articles = Article::with('category')->where('category_id',$id)->orderBy('created_at', 'desc')->first();

        return $articles;
    }

}
