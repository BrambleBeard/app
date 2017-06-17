<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class SecretController extends Controller
{
    public function index()
    {
        $title = "Secrets";
        $page_active = "secrets";
        $rteId = "rich-text-editor";
        $secrets = DB::table('secrets')->get();

        return view('secret.index', compact('title','page_active','rteId','secrets'));
    }
}
