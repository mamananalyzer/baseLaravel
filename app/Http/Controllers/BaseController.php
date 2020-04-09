<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function root()
    {
        return view ('navbar/home');
    }
    public function home()
    {
        return view ('navbar/index');
    }
    public function about()
    {
        return view ('navbar/about');
    }
    public function principal()
    {
        return view ('navbar/principal');
    }
}
