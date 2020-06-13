<?php

namespace App\Http\Controllers;

use App;
use App\Cart;
use Barryvdh\DomPDF\PDF as DomPDF;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Adapter\PDFLib;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App as FacadesApp;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $carts = Cart::all();
        return view('carts.index', ["carts" => $carts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        // dd($request->all());
        $carts = Cart::find($id);
        return view('carts.show', ['carts' => $carts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Display $display, $id)
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
        $request->validate([
            'status' => 'required',
            'picture' => 'required|unique:carts',
        ]);
        // dd($request->all());
        $bukti = Cart::find($id);
        $bukti->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/buktibayar/',$request->file('picture')->getClientOriginalName());
            $bukti->picture = $request->file('picture')->getClientOriginalName();
            $bukti->save();
        }
        // $categorie = Cart::find($id);
        // $categorie->update($request->all());
        return redirect('/carts')->with('status',
            'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        Cart::destroy($cart->id);
        return redirect('/carts')->with('status',
        'Data berhasil dihapus!');
    }
    public function pdf($test = 'test')
    {
        $pdf = PDF::loadView('test');
        return $pdf->download('test.pdf');


    }
}
