<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomepageController extends Controller {

    public function index() {
        return view("homepage");
    }
    
}
?>