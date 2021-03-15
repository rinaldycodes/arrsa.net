<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('pages.login');
    }


    public function auth(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $emailAdmin = "admin@tyaga.com";
        $pwAdmin = "tyaga123";

        if( $request->email == $emailAdmin) {
            if ($request->password == $pwAdmin) {
                return redirect()->route('posts.create')
                    ->with('msg', 'Selamat datang Admin');
            }
        } 

        return redirect('/login')
            ->with('msg', 'Salah email / password');
    }
}
