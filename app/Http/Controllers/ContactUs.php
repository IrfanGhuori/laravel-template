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
            'username' => 'required| max:3',
            'useremail' => 'required|email',
        ]);
        return redirect('/contact');    
    }
}
