<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cat;
use App\Media;
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
        $products = Product::all();

        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Cat::all();

        return view('admin/products/createproduct',compact('cats'));
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
            'des' => 'required',
            'title_fa' => 'max:255',
            'des_fa' => '',
            'cat_id' => '',
            'image' => 'image',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->
        getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        Product::create($validatedData);
        return redirect('admin/products')->with('success', 'product is successfully saved');
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
        $product = Product::findOrFail($id);
        $cats = Cat::all();
        return view('admin/products/editproduct', compact('product','cats'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'des' => 'required',
                'title_fa' => 'max:255',
                'des_fa' => '',
                'cat_id' => '',
                'image'=>'image',

            ]);
            $image_name = rand() . '.' . $image->
            getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }else{
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'des' => 'required',
                'title_fa' => 'max:255',
                'des_fa' => '',
                'cat_id' => '',
                'image' => 'image',
                ]);
                Product::whereId($id)->update($validatedData);
                return redirect('admin/products')->with('success', 'products is successfully updated');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('admin/products')->with('success', 'products is successfully deleted');
    }
}
