<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request){
        try{
            Mail::send('isicontact',
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
                // $pesan->to('amptron@cbn.net.id')->subject('Request a Quote');
                $pesan->to('dbasedown211@gmail.com')->subject('Request a Quote');
                $pesan->cc('dbasedown@gmail.com', 'Maman@amptron.my.id');
                $pesan->cc('baseanalyzer@amptron.my.id', 'Maman@amptron.my.id');
                // $pesan->from(env('MAIL_USERNAME','baseanalyzer@amptron.my.id'),'Inquiry');
                $pesan->from(env('MAIL_USERNAME', 'baseanalyzer210@gmail.com'),'Amptron.my.id');
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
            // dd($request->all());
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }




        return view('/receipt2', ['receipt' => $request])->with('terkirim',
        'Thank you for contacting us, your message has been sent.
                 Please wait for our admin to contact you.');
        // return redirect('/')->with('terkirim',
        // 'Thank you for contacting us, your message has been sent.
        //          Please wait for our admin to contact you.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
