<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Article;

class ColumnController extends Controller {

    public function index() {
        return view("column");
    }

    public function showAll(){
        $articles = Article::all();
        return $articles;
    }

    public function showArticle($q){
        $article = Article::where('titolo', $q)->first();
        return $article;
    }
}
?>