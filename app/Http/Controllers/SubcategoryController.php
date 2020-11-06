<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('category.index', compact('subcategories'));
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
        for($i=0;$i<count($request->name);$i++){
            $subcategory = Subcategory::where('category', $request->category)->where('name', $request->name[$i])->first();
            if(empty($subcategory)){
                Subcategory::create([
                    'category'=>$request->category,
                    'name'=>$request->name[$i],
                    'batch_id'=>$request->batch_id[$i],
                ]);
            }
            else{
                Session::flash('error', 'Sub-Cateogry '.$request->name[$i].' is already existed in ' .$request->category.' Category');
                return redirect()->back();
            }
        }
        Session::flash('success', 'Sub-Cateogry added successfully');
        return redirect()->back();
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
        Subcategory::find($id)->delete();
        return redirect()->back();
    }

    public function category($category){
        $sub_category = Subcategory::where('category', $category)->get();
        return response()->json($sub_category);
    }
    public function sub_category($sub_category, $category){
        $sub_category = Subcategory::where('category', $category)->where('name', $sub_category)->first();
        return response()->json($sub_category);
    }
}
