<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuzzleController extends Controller
{
    /**
     * Index game
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('puzzle.index');
    }
}
