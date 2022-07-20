<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Session;


class MyBooksController extends Controller {

    public function index(){
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login')->with('error', false);
        
        return view("mybooks")->with("user", $user);
    }

    public function search($q){
        $key=env('GOOGLEBOOKS_KEY');

        $query = urlencode($q);
        $url = 'https://www.googleapis.com/books/v1/volumes?q='.$query.'&maxResults=20&key='.$key;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);
        $json = json_decode($data, true);

        return $json;
    }

    public function addBook(){
        $username = User::where('id', session('user_id'))->first();

        if(Book::where('username', $username['username'])
                ->where('immagine', request('copertina'))
                ->where('titolo', request('titolo'))->exists()){
                    return 0;
                }

        $request = request();

        $newBook = new Book;
        $newBook->immagine = $request['copertina'];
        $newBook->titolo = $request['titolo'];
        $newBook->autore = $request['autore'];
        $newBook->username = $username['username'];
        $newBook->save();
    }

    public function showBooks(){
        
        $username = User::where('id', session('user_id'))->first();
        $books = Book::where('username', $username['username'])->get();

        return $books;
    }

    public function deleteBook(){
        $username = User::where('id', session('user_id'))->first();

        $book = Book::where('titolo', request('titolo'))
                    ->where('username', $username['username'])
                    ->where('immagine', request('copertina'));

        $book->delete();
    }
}
?>
