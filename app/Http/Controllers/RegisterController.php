<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RegisterController extends BaseController
{
    public function register_form(){
        return view('register');
    }

    protected function create()
    {
        $request = request();

        if($this->countErrors($request) === 0) {
            $newUser = new User;
            $newUser->nome = $request['nome'];
            $newUser->cognome = $request['cognome'];
            $newUser->username = $request['username'];
            $newUser->email = $request['email'];
            $newUser->password = $request['password'];
            $newUser->save();
            
            if ($newUser) {
                return redirect('login');
            } 
            else {
                return redirect('register')->withInput();
            }
        }
        else 
            return redirect('register')->withInput();
        
    }

    private function countErrors($data) {
        $error = array();
        
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già presente";
            }
        }
        
        if (strlen($data["password"]) < 8) {
            $error[] = "La password non è valida";
        } 
        
        if (strcmp($data["password"], $data["conferma-password"]) != 0) {
        }
        
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Sei già registrato";
            }
        }

        return count($error);
    }

    public function checkUsername($q) {
        $exist = User::where('username', $q)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($q) {
        $exist = User::where('email', $q)->exists();
        return ['exists' => $exist];
    }
}
