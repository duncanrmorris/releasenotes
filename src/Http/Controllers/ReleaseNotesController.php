<?php

namespace duncanrmorris\releasenotes\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReleaseNotesController extends Controller

{

    public function index()
    {
     
        $notes = require(__DIR__.'/Documentation/'.config('releasenotes.filename'));

        return view('releasenotes::notes',['file' => $notes]);
    }

}