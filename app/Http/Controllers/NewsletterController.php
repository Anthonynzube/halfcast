<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    
    public function store(Request $request)
    {
        if (! Newsletter::isSubscribed($request->email)){

            Newsletter::subscribePending($request->email);
            // return redirect('thanks');
            return redirect('/')->with('success', 'Thank You for subscribing');

        }

        return redirect('/')->with('failure', 'Sorry, you are already subscribed!');
    }

    public function thanks(){

        return view('thanks');
    }
}
