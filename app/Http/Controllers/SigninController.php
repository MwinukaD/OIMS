<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller{

    public function loginForm(){
        return view('client/login_form');
    }
}
