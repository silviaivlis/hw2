<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;

class LibroPerfettoController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login')->with("error", false);
        
        return view("libroperfetto")->with("user", $user);
    }

    public function showResults($q){
        $key=env('GOOGLEBOOKS_KEY');

        $subject = urlencode($q);
        $url = 'https://www.googleapis.com/books/v1/volumes?q=+subject:'.$subject.'&langRestrict=it&maxResults=20&orderBy=newest&key='.$key;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);
        $json = json_decode($data, true);

        return $json;
    }
}
?>