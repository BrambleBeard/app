<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Message;
use App\Secret;
use App\Http\Requests;

class PagesController extends Controller
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

    public function contact()
    {
        $title = "Contact";
        $page_active = "contact";
        return view('pages.contact', compact('title','page_active'));
    }

    public function newSecret()
    {
        $title = "New Secret";
        $page_active = "new";
        $rteId = "rich-text-editor";
        return view('pages.new', compact('title','page_active','rteId'));
    }

    public function savedSecrets()
    {
        $title = "Saved Secrets";
        $page_active = "saved";
        return view('pages.saved', compact('title','page_active'));
    }

    public function generateSecret()
    {
        $title = "Generate Secrets";
        $page_active = "generate";
        return view('pages.generate', compact('title','page_active'));
    }

    /**
     * Store a secret.
     *
     * @param  Request  $request
     * @return Response
     */
    public function storeSecret(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('flash_info','Validation error.');
        } else {
            $secret = new Secret;
            $secret->user_id = $request->user_id;
            $secret->content = $request->content;
            $secret->passcode = $request->passcode;
            $secret->url = $this->createUrlHash();
            // $secret->expires_at = $request->expires_at;
            $secret->save();
            session()->flash('flash_success','Secret created, url is: '.$secret->url.'.');
        }

        return redirect()->route('home');
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

    /**
     * Create a url hash
     *
     * @param  Integer $length
     * @return string
     */
    private function createUrlHash($length = null)
    {
        $source = 'abcdefghjkmnpqrstwxyzABCDEFGHKLMNOPQRSTWXYZ';
        $url = '';
        mt_srand((double)microtime()*1000000);

        // We can force the length of the hash by passing it to the function
        // otherwise, the length is a randomly created integer between 6 - 12
        if(!$length)
        {
            $length = rand(6, 12);
        }

        while (strlen($url) < $length)
        {
            $url .= $source{mt_rand(0, strlen($source)-1)};
        }

        return $url;
    }
}
