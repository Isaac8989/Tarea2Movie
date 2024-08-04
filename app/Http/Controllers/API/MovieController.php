<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function listMovies ($orden){
        if ($orden == 'asc'){
            return Movie::orderBy('id', 'asc')->get();
        } else {
            return Movie::orderBy('id', 'desc')->get();
        }
    }

    public function showMovie ($id){
        return Movie::find($id);
    }

    public function storeMovie (Request $request){
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->category_id = $request->category_id;
        $movie->save();
        return $movie;
    }
}
