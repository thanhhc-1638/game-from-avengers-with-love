<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Index home
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }
}
