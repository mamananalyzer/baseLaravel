<?php

namespace App\Http\Controllers;

use App\Admincart;
use App\Cart;
use App\User;
use Illuminate\Http\Request;

class AdmincartsController extends Controller
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
        return view('admincarts.index', ["carts" => $carts]);
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
    public function show(Admincart $admincart, $id)
    {
        // dd($request->all());
        $admincart = Cart::find($id);
        return view('admincarts.show', ['admincart' => $admincart]);
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
        ]);
        // dd($request->all());
        $categorie = Cart::find($id);
        $categorie->update($request->all());
        return redirect('/admincarts')->with('status',
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
}
