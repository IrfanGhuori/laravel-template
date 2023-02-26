<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUs extends Controller
{
   
    public function CollectData(Request $req) 
    {
        $validated = $req->validate([   
            'uEmail'             => 'required|unique:members',
            'uUser'          => 'required|min:4',
            'uDetails'      => 'required|min:10'
        ],
        [   
            'uEmail.required'    => 'Please Provide Your Email Address For Better Communication, Thank You.',
            'uEmail.unique'      => 'Sorry, This Email Address Is Already Used By Another User. Please Try With Different One, Thank You.',
            'uUser.required' => 'Username Is Required For Your Information Safety, Thank You.',
            'uUser.min'      => 'Username Length Should Be More Than 8 Character Or Digit Or Mix, Thank You.',
            'uDetails.required' => 'Details Is Required For Your Information Safety, Thank You.',
            'uDetails.min'      => 'Details Length Should Be More Than 10 Character Or Digit Or Mix, Thank You.'
        ]);
        // return redirect('/contact');    
    }

     
}
