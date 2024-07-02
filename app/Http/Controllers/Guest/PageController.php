<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dati = config("data");
        $movie = Movie::all();
        return view('home', $dati);
    }
}
