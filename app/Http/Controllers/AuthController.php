<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        //form_validation
        $request->validate(
            //rules
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:8',
            ],
            //error messages
            [
                'text_username.required' => 'O usuário é obrigatório.',
                'text_username.email' => 'Usuário deve ser um email válido.',
                'text_password.required' => 'A senha é obrigatória.',
                'text_password.min' => 'A senha deve ter no mínimo :min caracteres.',
                'text_password.max' => 'A senha deve ter no máximo :max caracteres.'
            ]
        );

        //get user input
        $username = $request->text_username;
        $password = $request->text_password;


    }

    public function logout()
    {
        echo 'logout';
    }
}
