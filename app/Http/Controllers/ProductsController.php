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
    public function index(Request $request)
    {
        if  ($request->has('cari')){
            // $products = Product::where('brand', 'LIKE', '%'.$request->cari.'%')->get();
            $products = Product::where('type', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else    {
            $products = Product::all();
        }
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

            // dd($request->all());

        $request->validate([
            'brand' => 'required',
            'type' => 'required|unique:products',
            'picture' => 'required|unique:products',
            'description' => 'required',
            'listdescription' => 'required',
            'datasheet' => 'required',
            'usermanual' => 'required'
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
    public function update(Request $request,$id)
    {
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'picture' => 'required|unique:products',
            'description' => 'required',
            'listdescription' => 'required',
            'datasheet' => 'required',
            'usermanual' => 'required'
        ]);

        // $product = Product::find($request->id);

        // Product::where('id', $product->id)
        //         ->update([
            //             'brand' => $request->brand,
            //             'type' => $request->type,
        //             'code' => $request->code,
        //             'purchaseorder' => $request->purchaseorder,
        //             'serialnumber' => $request->serialnumber,
        //             'spec' => $request->spec,
        //             'customer' => $request->customer
        //         ]);
        // dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $product->picture = $request->file('picture')->getClientOriginalName();
            $product->save();
        }
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
