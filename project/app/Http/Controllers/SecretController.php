<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SecretController extends Controller
{
    public function index()
    {
        $title = "Secrets";
        $page_active = "secrets";
        $rteId = "rich-text-editor";
        // $user = User::findOrFail(1);

        return view('secret.index', compact('title','page_active','rteId'));
    }
}
