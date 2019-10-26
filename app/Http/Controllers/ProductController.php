<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('product.index', [
            'products' => $products
        ]);
        //
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
    public function show($slug)
    {
        // if(Auth::guest()){
        //     return redirect('/login')->with('error', 'Please Login First');
        // }
        $product = Product::where('slug','=',$slug)->get();
        if(count($product) == 0) return abort(404);
        $product = $product->first();
        return view('product.show')->with('product', $product);
        //
    }

    public function payment(Request $request, $slug)
    {
        if(Auth::guest()){
            return redirect('/login')->with('error', 'Please Login First');
        }
        $product = Product::where('slug','=',$slug)->get();
        if(count($product) == 0) return abort(404);
        $product = $product->first();

        //Process User Order
        $qty = $request->qty;
        $address = $request->address;
        if(ctype_digit($qty) == false || $qty <= 0) return redirect()->back()->with('error', 'Quantity must be a positive integer');
        $this->validate($request, [
            'qty' => 'required',
            'address' => 'required'
        ]);

        //Create Transaction
        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->product_id = $product->id;
        $transaction->qty = $qty;
        $transaction->status = 1;
        $transaction->address = $address;
        $transaction->save();
        return view('home')->with('success', 'Succesfully Added');
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
