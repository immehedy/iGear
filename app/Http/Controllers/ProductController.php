<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Stock;
use App\Subcategory;
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
        $subcategories = Subcategory::all();
        $categories = Category::all();
        $products = Product::all();
        return view('products.index', compact('products', 'categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('products.create', compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/products/',$document_name);
        $prodid = $request->pid;
        $baseid = $request->bid;
        $quantity = $request->quantity;

        for($i=0;$i<$quantity;$i++) {
            $product = Product::create([
                'bid'=> $baseid,
               'pid' => $baseid.rand(1,1000),
                'category' => $request->category,
                'subcategory' => $request->subcategory,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $document_name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'status' => 'In Stock'
            ]);
        }

     //stock Creation

        $stock = Stock::where('bid', $baseid)->first();
        if(empty($stock)){
            Stock::create([
                'bid'=>$product->bid,
                'pid'=>$product->pid,
                'category'=>$product->category,
                'subcategory'=>$product->subcategory,
                'title'=>$product->title,
                'description'=>$product->description,
                'image'=>$product->image,
                'quantity'=>$product->quantity,
            ]);
        }
        else{
            $stock->update([
                'quantity'=>$stock->quantity + $product->quantity,
            ]);
        }

        return redirect()->route('products.index');

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
        $subcategories = Subcategory::all();
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit', compact('product', 'categories','subcategories'));
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
        $old_image = $request->oldimage;

        if ($request->hasFile('image')) {
            unlink(public_path('/assets/images/products/'.$old_image));
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/products/',$document_name);
            $product = Product::find($id);
            $product->update([
                'category'=>$request->category,
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$document_name,
                'price'=>$request->price,
            ]);
        }
        else{
            $product = Product::find($id);
            $product->update([
                'category'=>$request->category,
                'title'=>$request->title,
                'description'=>$request->description,
                'price'=>$request->price,
            ]);
        }

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }


}
