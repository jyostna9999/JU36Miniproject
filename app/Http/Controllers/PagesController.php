<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('pages.index');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }

    function contactpost()
    {
        $data = request()->all();
        echo "Name: " . $data['name'] . '<br>';
        echo "Email: " . $data['email'] . '<br>';
        echo "Subject: " .$data['subject']. '<br>';
        echo "Message: " . $data['body'].'<br>';
    }
    function signin()
    {
        return view('pages.signin');
    }
    function signup()
    {
        return view('pages.signup');
    }
    function viewmessages()
    {
        return view('pages.viewmessages');
    }
    function viewcardmessage()
    {
        return view('pages.viewcardmessage');
    }

    function logout()
    {
        return view('pages.logout');
    }

    /* -- Code for 'Thank you' message
        function store(Request $request)
        {
           // dd($request);

            $name = request()-> name;
            $email = request() -> email;

            return redirect() -> route('thanks',['name' => $name,'email' => $email]);
        }

        function thanks($name,$email)
        {
            //return view('pages.thankyou')->with(compact('name'));
            return view('pages.thankyou')->with(compact(['name','email']));
        }
    */
}
