<?php

namespace duncanrmorris\releasenotes\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReleaseNotesController extends Controller

{

    public function index()
    {
     
        
        return view('releasenotes::notes');
    }

}