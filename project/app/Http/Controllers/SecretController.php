<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;
use App\Http\Requests;
use App\Secret;

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

    public function create()
    {
        $title = "New Secret";
        $page_active = "new";
        $rteId = "rich-text-editor";
        return view('pages.new', compact('title','page_active','rteId'));
    }

    public function saved()
    {
        $title = "Saved Secrets";
        $page_active = "saved";
        $secrets = DB::table('secrets')->get();
        return view('pages.saved', compact('title','page_active','secrets'));
    }

    public function generate()
    {
        $title = "Password Generator";
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
            $secret->title = $request->title;
            $secret->content = $request->content;
            $secret->passcode = $request->passcode;
            $secret->url = $this->createUrlHash();
            // $secret->expires_at = $request->expires_at;
            $secret->save();
            session()->flash('flash_success','Secret created, url is: '.$secret->url.'.');
        }

        return redirect()->route('newSecret');
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
