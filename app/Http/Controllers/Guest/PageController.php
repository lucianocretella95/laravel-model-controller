<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movie = Movie::all();
		$data = [
			"result" => $movie,
			"altrodato" => 42
		]; 
        return view('home', $data);
    }
}
