<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function home()
    {
        return view('theme.home');
    }
    public function about()
    {
        return view('theme.about');
    }
    public function contact()
    {
        return view('theme.contact');
    }
}
