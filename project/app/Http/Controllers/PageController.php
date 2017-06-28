<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use App\Message;
use App\Http\Requests;

class PageController extends Controller
{
    /**
     * About page
     *
     * @return Response
     */
    public function about()
    {
        $title = "About";
        $page_active = "about";
        // $content = Cms::where('tag','about')->where('status',1)->first();
        return view('pages.about', compact('title','page_active', 'content'));
    }


    /**
     * Contact page
     *
     * @return Response
     */
    public function contact()
    {
        $title = "Contact";
        $page_active = "contact";
        return view('pages.contact', compact('title','page_active'));
    }

    /**
     * Dashboard once logged in
     *
     * @return Response
     */
    public function dashboard()
    {
        $title = "Dashboard";
        $page_active = "dashboard";
        return view('dashboard.index', compact('title','page_active'));
    }

    /**
     * Splash page or home page
     *
     * @return Response
     */
    public function splash()
    {
        $title = "Home";
        $page_active = "home";
        $rteId = "rich-text-editor";
        return view('pages.splash', compact('title','page_active','rteId'));
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
