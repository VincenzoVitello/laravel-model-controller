<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class IlControllore extends Controller
{
    public function index(){
        $moviesTable = Movie::all();
        return view('welcome', ['moviesArray' => $moviesTable]);
    }
}
