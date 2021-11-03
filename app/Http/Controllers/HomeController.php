<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Funzione che gestisce la logica della home   
    public function index(){
        $movies = Movie::all();
        $data = [
            "movies" => $movies
        ];
        return view('home', $data);
    }
}
