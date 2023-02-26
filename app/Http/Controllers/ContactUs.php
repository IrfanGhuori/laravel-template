<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactUs extends Controller
{
   
    public function CollectData(Request $req) 
    {
        $validated = $req->validate([   
            'uEmail' => 'required|email:rfc',
            'uUser' => 'required|min:4',
            'uDetails' => 'required|min:10'
        ],
        [   
            'uEmail.required'    => 'Please Provide Your Email Address For Better Communication, Thank You.',
            'uEmail.email'      => 'The your email field must be a valid email address.',
            'uUser.required' => 'Username Is Required For Your Information Safety, Thank You.',
            'uUser.min'      => 'Username Length Should Be More Than 8 Character Or Digit Or Mix, Thank You.',
            'uDetails.required' => 'Details Is Required For Your Information Safety, Thank You.',
            'uDetails.min'      => 'Details Length Should Be More Than 10 Character Or Digit Or Mix, Thank You.'
        ]);
            
    }

     
}
