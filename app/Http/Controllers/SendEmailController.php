<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    { 
        $email = $request->input('email');
        $maildata = [
            "app"=> $request->input('app', 'victory'),
            "message"=> $request->input('message', 'victory'),
            "name"=> $request->input('name','victory'),
            "location"=> $request->input('location','victory'),
            "mobile"=>  $request->input('mobile','victory'),
        ];
        Mail::to($email)->send(new SendMail($maildata));
        return response(['status' => true ,'msg' => 'email send successfully']);
    }
}
