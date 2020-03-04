<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request){
        

        try{
            Mail::send('isiemail', 
            array('pesan' => $request->pesan, 'name2' => $request->name2) , 
            function($pesan) use($request){
                $pesan->to('dbasedown@gmail.com', 'dbasedown@gmail.com')->subject('Request a Quote');
                $pesan->from(env('MAIL_USERNAME','baseanalyzer210@gmail.com'),'Inquiry');
                // $name = $request->input('name');
                $name2 = $request->input('name2', 'name');
                // $emailAddress = $request->input('email');
                // $message = $request->input('message');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
