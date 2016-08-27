<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function splash()
    {
        // $title = "Home Page";
        // $page_active = "home";
        // return view('pages.home', compact('title','page_active'));
        return view('pages.splash');
    }
}
