<?php

namespace App\Http\Controllers\Admin;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('/others.admin-index.adminm');


    }
    public function contact(){

        return view('/layouts.homevery');


    }

    public function sendmessage(Request $request){

$data =new Message();
        $data->name =$request->input( 'name');
        $data->email= $request->input( 'email');
        $data->subject =$request->input( 'subject');
        $data->message =$request->input('message');
        $data->save();

        return redirect(route('contact_us'));


    }


}
