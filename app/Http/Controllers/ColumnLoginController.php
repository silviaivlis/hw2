<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Article;

class ColumnLoginController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login')->with("error", false);
        
        return view("columnlogin")->with("user", $user);
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