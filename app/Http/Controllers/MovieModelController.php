<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use Illuminate\Http\Request;

class MovieModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = MovieModel::all();
        return view('home',['slider'=>$movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function show(MovieModel $movieModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MovieModel $movieModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovieModel $movieModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieModel  $movieModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieModel $movieModel)
    {
        //
    }
}
