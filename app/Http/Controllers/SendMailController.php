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
            array(
                'name' => $request->name, 
                'name2' => $request->name2, 
                'email' => $request->email, 
                'company' => $request->company,
                'phone' => $request->phone,
                'Address1' => $request->Address1,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'pesan' => $request->pesan
            ) ,
            function($pesan) use($request){
                $pesan->to('dbasedown@gmail.com', 'dbasedown@gmail.com')->subject('Request a Quote');
                $pesan->from(env('MAIL_USERNAME','baseanalyzer210@gmail.com'),'Inquiry');
                // $name = $request->input('name');
                $name = $request->input('name');
                $name2 = $request->input('name2');
                $email = $request->input('email');
                $company = $request->input('company');
                $phone = $request->input('phone');
                $Address1 = $request->input('Address1');
                $city = $request->input('city');
                $postcode = $request->input('postcode');
                $pesan = $request->input('pesan');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
