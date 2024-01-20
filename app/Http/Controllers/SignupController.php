<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller{

    public function registerForm(){
        return view('client/register_form');
    }
}
