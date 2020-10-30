<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelaxController extends Controller
{
    /**
     * Index relax
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('relax.index');
    }
}
