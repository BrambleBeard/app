<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function splash()
    {
        $title = "Home";
        $page_active = "home";
        return view('pages.splash', compact('title','page_active'));
        // return view('pages.splash');
    }

    public function about()
    {
        $title = "About";
        $page_active = "about";
        // $content = Cms::where('tag','about')->where('status',1)->first();
        return view('pages.about', compact('title','page_active', 'content'));
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
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
        session()->flash('flash_success','Thank you for your message.');
        return redirect()->route('home');
    }
}
