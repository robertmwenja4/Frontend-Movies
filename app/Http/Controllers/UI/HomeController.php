<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $movies = DB::table('movie_models')->get();
        return view('movies.viewMovies', ['movies' => $movies]);
    }
}
