<?php

namespace App\Http\Controllers;

use App\Display;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems=Cart::content();
        // dd($cartItems->all());
        return view('cart.index', compact('cartItems'));
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
        dd($request->all());

        for ($i = 1; $i < count($request->id); $i++) {
            $answers[] = [
                'user_id' => Sentinel::getUser()->id,
                'en_answer' => $request->en_answer[$i],
                'question_id' => $request->question_id[$i]
            ];
        }
        EnAnswer::insert($answers);
        return redirect('submitted')->with('status', 'Your answers successfully submitted');

        $formInput=$request->except('picture');

        $this->validate($request,[
            'rowId' => 'required',
            'name' => 'required',
            'qty' => 'required|unique:products',
        ]);

        $image=$request->picture;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/', $imageName);
            $formInput['picture']=$imageName;
        }


        Product::create($formInput);

        return redirect('/products')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
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
    public function edit(Display $display, $id)
    {
        $display=Display::find($id);
        // dd($display->all());
        Cart::add($id, $display->type, 1, 9.99);
        return back();
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
        // Cart::update($request->id,
        //     array(
        //         'quantity' => array(
        //             'relative' => false,
        //             'value' => $request->quantity
        //         ),
        // ));
        // return back();
        // dd($request->all());

        Cart::update($id, $request->qty); // Will update the quantity
        return back();
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
