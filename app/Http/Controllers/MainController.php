<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }
    public function contactus(){
        return view('contactus');
    }
    public function contactpost(Request $request)
    {
        $data = $request->validate([
          'fn'=>'required|string',
          'ln'=>'required|string',
          'email'=>'required|email',
          'phone'=>'required|string',
          'code'=>'required|string',
       
        ]);
      
        Mail::to('anony.jjml@gmail.com')->send(new Contact($data));

        return redirect()->route('contact')->with('success', 'Thanks for submitting the form');
        
    }
}
