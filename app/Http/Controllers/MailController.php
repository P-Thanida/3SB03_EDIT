<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail ;

class MailController extends Controller
{
    public function basic_email(){
        $data = array('name'=>"Thanida");
        Mail::send(['text'=>'mail'], $data, function($message){
             $message->to('s5935512088@phuket.psu.ac.th','test')->subject('Laravel Basic Testing Mail 555');
             $message->from('s6135512015@phuket.psu.ac.th','6135512015');
 
        });
        echo "Basic Email sent.Check your inbox.";
    }
}