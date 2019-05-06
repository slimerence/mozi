<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function contact(Request $request){
        $data = $request->all();
        //dd($data);
        if ($data['name'] == '' || $data['email'] == '' || $data['phone'] ==''){
            return redirect('/');
        }
        Mail::to('slimerence@gmail.com')->send(new contact($data['name'],$data['phone'],$data['email'],$data['message']));
        return back()->with('success','We have received your request!');
    }
}
