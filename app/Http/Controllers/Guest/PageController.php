<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function about()
    {

        $movies = Movie::all();

        return view('about', compact('movies'));
    }

    public function contact()
    {

        $movies = Movie::all();

        return view('contact', compact('movies'));
    }
}
