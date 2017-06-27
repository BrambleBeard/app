<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use App\Message;
use App\Http\Requests;

class PageController extends Controller
{
    public function splash()
    {
        $title = "Home";
        $page_active = "home";
        $rteId = "rich-text-editor";
        return view('pages.splash', compact('title','page_active','rteId'));
    }

    public function about()
    {
        $title = "About";
        $page_active = "about";
        // $content = Cms::where('tag','about')->where('status',1)->first();
        return view('pages.about', compact('title','page_active', 'content'));
    }

    public function dashboard()
    {
        $title = "Dashboard";
        $page_active = "dashboard";
        return view('dashboard.index', compact('title','page_active'));
    }

    public function contact()
    {
        $title = "Contact";
        $page_active = "contact";
        return view('pages.contact', compact('title','page_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function storeContact(Request $request)
    {
        $message = new Message;
        $message->first = $request->first;
        $message->last = $request->last;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
        session()->flash('flash_success','Thank you for your message.');
        return redirect()->route('home');
    }
}
