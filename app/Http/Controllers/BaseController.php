<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        return view ('index');
    }
    public function about()
    {
        return view ('about');
    }
    public function principal()
    {
        return view ('principal');
    }
}
