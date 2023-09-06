<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;

class Authcontroller extends Controller
{
    //
    public function add_user(Request $req) {

        $data = new user();
        $data->firstname = $req-> fname;
        $data->lasttname = $req-> lname;
        $data->email = $req-> email;
        $data->nationality = $req->nation;
        $data->password = $req->password;
        return $data;

        // return view('pages.register');
    }

    public function register() {
        return view('pages.register');
    }

    public function login() {
        return view('pages.login');
    }
}
