<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Review;

class RecensioniController extends Controller {

    public function index() {

        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login')->with('error', false);
        
        return view("recensioni")->with("user", $user);
    }
    
    public function createPost(){

        $username = User::where('id', session('user_id'))->first();

        $request = request();
        $newReview = new Review;
        $newReview->titolo = $request['titolo'];
        $newReview->autore = $request['autore'];
        $newReview->testo = $request['commento'];
        $newReview->username = $username['username'];
        $newReview->save();
        
        if($newReview){
            return redirect('recensioni');
        }
    }

    public function showReviews(){
        $reviews = Review::orderBy('created_at', 'DESC')->get();
        return $reviews;
    }

    public function deleteReview($q){
        $review = Review::where('testo', $q);
        $review->delete();
    }
}
?>
