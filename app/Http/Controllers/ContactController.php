<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    private $EmailAddress = null;
    private $UserName = null;
    private $Details = null;


    public function SendQuery(Request $data)
    {
        $this->EmailAddress = $data->input('uEmail');
        $this->UserName = $data->input('uUser');
        $this->Details = $data->input('uDetails');   
        if($this->CheckEmailAddress() === false)
        {          return Redirect::back()->withErrors(['msg' => 'This email address already in use']);
        }else{

            $this->validate($data, [
                "uUser" => "required|min:4",
                "uEmail" => "required|email:rfc,dns",
                "uDetails" => "required|min:4"
            ]);

           
            $qr = DB::table('contacts')->insert(["username" => $this->UserName, "useremail" =>  $this->EmailAddress, "details" => $this->Details]);
            if($qr == true)
            {
                return Redirect::back()->withErrors(['success' => 'We have received your message, out team will be contact you as soon as possible for us']);  
            }
        } 
    }

    private function CheckEmailAddress()
    {
        $emails = DB::table('contacts')->where('useremail',$this->EmailAddress)->first();
        if(empty($emails))
        { return true; }else{ return false; }
       
       
    }


}
?>
