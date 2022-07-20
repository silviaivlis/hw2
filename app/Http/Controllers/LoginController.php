<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function login() {
        if(session('user_id') !== null) {
            return redirect("homepage");
        }
        else {
            return view('login')->with('error', false);
        }
    }

    public function checkLogin() {
        $user = User::where('username', request('username'))
                      ->where('password', request('password'))
                      ->first();

        if($user !== null) {
            Session::put('user_id', $user->id);
            return redirect('home');
        }
        else {
            return view('login')->with('error', true);
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login');
    }
}

?>