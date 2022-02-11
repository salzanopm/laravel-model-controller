<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class HomeController extends Controller
{
    public function index() {
        $film = Film::all();
        dd($film);
        return view('home');
    }
}
