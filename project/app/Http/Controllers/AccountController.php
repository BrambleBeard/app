<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Message;
use App\Secret;
use App\Http\Requests;

class AccountController extends Controller
{
    public function index()
    {
        $title = "My Account";
        $page_active = "account";
        $rteId = "rich-text-editor";
        return view('account.index', compact('title','page_active','rteId'));
    }
}
