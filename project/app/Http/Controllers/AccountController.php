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

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function storeAccount(Request $request)
    {
        // $message = new Message;
        // $message->first = $request->first;
        // $message->last = $request->last;
        // $message->email = $request->email;
        // $message->subject = $request->subject;
        // $message->message = $request->message;

        // $message->save();
        // session()->flash('flash_success','Thank you for your message.');
        // return redirect()->route('home');
    }
}
