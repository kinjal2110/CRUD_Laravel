<?php

  

namespace App\Http\Controllers;

   

use App\Models\Product;

use Illuminate\Http\Request;

  

class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = Product::latest()->paginate(5);

    

        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

     

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('products.create');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'fname' => 'required | min:3 | max:15',
            // 'dayTime' => '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
         'dayTime' => 'required | numeric | regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
         'lname' => 'required | min:3 | max:30',
         'birthdate' => 'required',
         'eveningTime' => 'required | numeric | regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
         'choose' => 'required',
         'date' => 'required',
         'time' => 'required',
         'reason' => 'required',
        ]);

    

        Product::create($request->all());

     

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('products.show',compact('product'));

    } 

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('products.edit',compact('product'));

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

            'fname' => 'required',
            // 'dayTime' => 'nullable|string|min:10|max:10|regex:/^\d{3}-\d{3}-\d{4}$/',
         
         
        ]);

    

        $product->update($request->all());

    

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();

    

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

}