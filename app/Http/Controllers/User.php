<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index() {
        return view('user.header').view('user.index').view('user.footer');
    }
}
