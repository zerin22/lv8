<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news($category, $id, $title, $description)
    {
        return view('news', compact(['category', 'id', 'title', 'description']));
    }
}
