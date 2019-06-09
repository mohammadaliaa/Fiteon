<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Cat;
use View;

class CatController extends Controller
{
    public function create(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|unique:cats',

        ]);

        $cat = new Cat();
        $cat->title = $request->title;
        $cat->save();
        // return response()->json(['status'=>'ok', 'message'=>$cat]);
        return redirect()->route('cat.list',$cat);
    }

    public function get(Request $request)
    {

        $credentials = $request->only('cat_id');


        $rules = [
            'cat_id' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {

            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }

        $cat = Cat::find($request->cat_id);

        return response()->json(['status'=>'ok', 'message'=>$cat]);

    }
    public function list(Request $request)
    {
        $cats = Cat::all();
        // return $cats;
        return View::make("admin/cats")->with(array('cats'=>$cats));
    }
    public function update(Request $request)
    {

        $credentials = $request->only('cat_id','title');


        $rules = [
            'cat_id' => 'required',
            'title' => 'required|max:255|unique:cats'
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {

            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }

        $cat = Cat::find($request->cat_id);
        $cat->title = $request ->title;
        $cat->save();
        return response()->json(['status'=>'ok', 'message'=>$cat]);

    }
    public function delete(Request $request)
    {
        $credentials = $request->only('cat_id');
        $rules = [
            'cat_id' => 'required',

        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {

            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }
        $cat = Cat::find($request->cat_id);
        // $products = $cat->products;
        // $products->delete();
        $cat->delete();
        return response()->json(['status'=>'ok', 'message'=>'deleted']);
    }


    public function getCatProducts(Request $request)
    {
        $credentials = $request->only('cat_id');
        $rules = [
            'cat_id' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }
        $cat =Cat::find($request->cat_id);
        $products = $cat->Products;
        return response()->json(['status'=>'ok', 'message'=>$products]);
    }
}
