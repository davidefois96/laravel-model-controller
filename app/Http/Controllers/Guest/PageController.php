<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies= Movie::all();

        $pageTitle= 'HOME';

        return view('home',compact('movies','pageTitle'));
    }

    public function bestMovies(){

        $movies= Movie::where('vote','>',6.5)->get();

        $pageTitle= 'I MIGLIORI FILM';

        return view('home',compact('movies','pageTitle'));
    }


    public function movieDetails($id){

        $movie = Movie::find($id);

        if (!isset($movie)) {
            abort(404);
        }



        return view('movieDetails', compact('movie'));
    }
}
