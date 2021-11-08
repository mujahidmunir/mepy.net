<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function getArticleRecord()
    {
        $article = Article::join('categories', 'articles.category_id', '=', 'categories.id')
        ->select('articles.id as id_articles',
        'articles.title as title')
        ->where('categories.id', 2)
        ->get();

        return $article;
    }

    function getArticleCreativa()
    {
        $article = Article::join('categories', 'articles.category_id', '=', 'categories.id')
        ->select('articles.id as id_articles',
        'articles.title as title')
        ->where('categories.id', 3)
        ->get();

        return $article;
    }

    function getArticleTalent()
    {
        $article = Article::join('categories', 'articles.category_id', '=', 'categories.id')
        ->select('articles.id as id_articles',
        'articles.title as title')
        ->where('categories.id', 4)
        ->get();

        return $article;
    }

    function getArticleEntertainment()
    {
        $article = Article::join('categories', 'articles.category_id', '=', 'categories.id')
        ->select('articles.id as id_articles',
        'articles.title as title')
        ->where('categories.id', 5)
        ->get();

        return $article;
    }


    function getCategory()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return $category;
    }

}
