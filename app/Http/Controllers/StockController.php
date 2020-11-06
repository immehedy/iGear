<?php

namespace App\Http\Controllers;

use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::paginate(20);
        return view('stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create($id)
//    {
//        $product = Product::find($id);
//        $stocks = Stock::all();
//        return view('stock.create', compact('stocks'));
//    }
    public function create()
    {

        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $product= Product::find($id);
//        $stock = Stock::where('pid', $id)->first();
//        if(empty($stock)){
//            Stock::create([
//                'pid'=>$product->id,
//                'category'=>$product->category,
//                'title'=>$product->title,
//                'description'=>$product->description,
//                'image'=>$product->image,
//                'quantity'=>$product->quantity,
//            ]);
//        }
//        else{
//            $stock->update([
//                'quantity'=>$stock->quantity + $request->quantity,
//            ]);
//        }
//
//        Session::flash('success', 'Stock is added successfully');
//        return redirect()->route('stock.index');
        $pid = $request->pid;
        $status = $request->status;
//        return $pid.$status;
        $product = Product::find($pid);
        $product->update([
            'status'=> $status,
        ]);

       $test = Stock::where('bid', $product->bid)->get();
//       $quan =  - 1;
//        $test->update([
//            'quantity'=> $quan ,
//        ]);
        return $test->quantity;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock=Stock::find($id);
        return view('stock.show', compact('stock'));
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
    public function update(Request $request)
    {

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
    public function invoice(){
        return view('invoice.index');
    }
    public function pre_order($pid){
        $product = Product::find($pid);
        $product->update([
           'status'=>'pre-order',
        ]);
        $stock = Stock::where('bid', $product->bid)->first();
        $stock->update([
           'quantity'=>$stock->quantity - 1,
        ]);
        Session::flash('suscess', 'Product is pre-ordered successfully');
        return redirect()->back();

    }
    public function sold($pid){
        $product = Product::find($pid);
        $product->update([
            'status'=>'sold',
        ]);
        $stock = Stock::where('bid', $product->bid)->first();
        $stock->update([
            'quantity'=>$stock->quantity - 1,
        ]);
        Session::flash('suscess', 'Product is sold');
        return redirect()->back();

    }
}
