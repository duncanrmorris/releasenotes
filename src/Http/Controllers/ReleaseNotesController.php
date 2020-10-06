<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReleaseNotesController extends Controller

{

    public function index()
    {
     
        $notes = require(base_path('documentation/'.config('releasenotes.filename')));

        return view('releasenotes.notes',['file' => $notes]);
    }

}