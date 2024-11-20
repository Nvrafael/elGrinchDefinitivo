<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function game()
    {
     
    }

}
