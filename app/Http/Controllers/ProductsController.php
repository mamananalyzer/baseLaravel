<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Product;
        // $product->brand = $request->brand;
        // $product->type = $request->type;
        // $product->code = $request->code;
        // $product->purchaseorder = $request->purchaseorder;
        // $product->serialnumber = $request->serialnumber;
        // $product->spec = $request->spec;
        // $product->customer = $request->customer;
        // $product->save();

        // Product::create([
        //     'brand'=> $request->brand,
        //     'type'=> $request->type,
        //     'code'=> $request->code,
        //     'purchaseorder'=> $request->purchaseorder,
        //     'serialnumber'=> $request->serialnumber,
        //     'spec'=> $request->spec,
        //     'customer'=> $request->customer,
        // ]);

        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'code' => 'required',
            'purchaseorder' => 'required|unique:products',
            'serialnumber' => 'required|unique:products',
            'spec' => 'required',
            'customer' => 'required'
        ]);

        Product::create($request->all());

        return redirect('/products')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
        // return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'code' => 'required',
            'purchaseorder' => 'required',
            'serialnumber' => 'required',
            'spec' => 'required',
            'customer' => 'required'
        ]);

        Product::where('id', $product->id)
                ->update([
                    'brand' => $request->brand,
                    'type' => $request->type,
                    'code' => $request->code,
                    'purchaseorder' => $request->purchaseorder,
                    'serialnumber' => $request->serialnumber,
                    'spec' => $request->spec,
                    'customer' => $request->customer
                ]);
            return redirect('/products')->with('status',
            'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status',
        'Data berhasil dihapus!');
    }
}
