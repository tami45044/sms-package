<?php

namespace rlgroups\Smsrl\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use rlgroups\Smsrl\Models\Sms;
use rlgroups\Smsrl\Mail\SmsMailable;
use Mail;
//use Illuminate\Support\Facedes\Mail;

class SmsController extends Controller
{
    public function index(){
        return view('Smsrl::Smsrl.sms');
    }

    public function send(Request $request){
        Mail::to('tami45044@gmail.com')->send(new SmsMailable($request->name));
        Sms::create($request->all());
        return redirect(route('sms'));
    }
}
