<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Product;
use App\Info;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();

        return view('admin/cats/index', compact('cats'));
    }
    // public function indexview($cat_id)
    // {

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cats/createcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'title_fa' => 'required|max:255',
        ]);
        $cat = Cat::create($validatedData);

        return redirect('admin/cats')->with('success', 'cat is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cat_id)
    {
        $cats = Cat::all();
        $infos = Info::all();
        $products;
        if ($cat_id == null){
            $products = Product::all();

        }else{
            $products = Cat::find($cat_id)->products;
        }
        return view('products.productsView', compact('cats','products','infos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);

        return view('admin/cats/editcat', compact('cat'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'title_fa' => 'required|max:255',
        ]);
        Cat::whereId($id)->update($validatedData);

        return redirect('admin/cats')->with('success', 'cat is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $cat->delete();

        return redirect('admin/cats')->with('success', 'cat is successfully deleted');
    }
}
