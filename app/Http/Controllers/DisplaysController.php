<?php

namespace App\Http\Controllers;

use App\Display;
use App\Categorie;
use Illuminate\Http\Request;

class DisplaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if  ($request->has('cari')){
            $displays = Display::where('type', 'LIKE', '%'.$request->cari.'%')->get();
            $categories = Display::where('type', 'LIKE', '%'.$request->cari.'%')->get();
        }
        elseif ($request->has('brand')) {
            $displays = Display::where('brand', 'LIKE', '%'.$request->brand.'%')->get();
            $categories = Display::where('brand', 'LIKE', '%'.$request->brand.'%')->get();
        }
        elseif  ($request->has('categorie')){
            $displays = Display::where('categorie', 'LIKE', '%'.$request->categorie.'%')->get();
            $categories = Display::where('categorie', 'LIKE', '%'.$request->categorie.'%')->get();
            $categories = Categorie::all();
        }
        else    {
            $displays = Display::all();
            $categories = Categorie::all();
        }
        return view('displays.index', ['display' => $displays], ['categorie' => $categories]);
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
     * @param  \App\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function show(Display $display)
    {
        // dd($display, $product->all());
        return view('displays.show', ['display' => $display]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function edit(Display $display)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Display $display)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function destroy(Display $display)
    {
        //
    }
}
