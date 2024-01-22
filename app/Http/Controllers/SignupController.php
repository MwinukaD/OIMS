<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

use Ramsey\Uuid\Uuid;

class SignupController extends Controller{

    public function registerForm(){
        return view('client/register_form');
    }
    public function newClientRegistration(Request $request)
    {


            $validated = $request->validate([
                'email' => 'required|string|email|max:255|unique:users',
                'uniqueID' => 'required|string',
                'password' => 'required|string|max:15',
                'repassword' => [
                    'required',
                    'string',
                    'max:15',
                    //Rule::in([$request->password]),
                ],
            ]);

            $account = Account::create([

                'email' => $validated['email'],
                'uniqueID' => $validated['uniqueID'],
                'password' => $validated['password'],
                'uuid' => Uuid::uuid4()->toString(),
                'status' => $validated['email'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($account) {
                $data = [
                    'status' => 'success',
                    'message' => 'account successfully created'
                ];
            } else {

                $data = [
                    'status' => 'error',
                    'message' => 'Failed to create account'
                ];
            }

            return response()->setJSON($data);


    }

}
