<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\Media;
use App\Cat;
use View;
use App\Helpers\Functions;
class ProductController extends Controller
{
     public function create(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|unique:products',
            'des' => 'required',
            'cat_id' => 'required',
        ]);
        $product = new Product();
        $product->title = $request->title;
        $product->des = $request->des;
        $product->cat_id = $request->cat_id;

        $product->save();

        if($request->has('img')){
            $media = new Media();
            $functions = new Functions();
            $media->product_id = $product->id;
            $media->image_src = $functions->SaveImageProfile($request->file('img'));
            $media->save();
        }
        $cats = Cat::all();
        return redirect()->route('product.list',$product,$cats);

    }

    public function get(Request $request)
    {
        $credentials = $request->only('id');
        $rules = [
            'id' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }

        $product = Product::find($request->id);

        return response()->json(['status'=>'ok', 'message'=>$product]);
    }
    public function list(Request $request)
    {
        $products = Product::all();
        return View::make("admin/products")->with(array('products'=>$products));
    }
    public function update(Request $request)
    {
        $credentials = $request->only('id','title','des','cat_id','img','img_delete');
        $rules = [
            'id' => 'required',
            'title'=>'max:255|unique:products',
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        }
        $product = Product::find($request->id);
        if($request->filled('title')){
            $product->title = $request->title;
        }
        if($request->filled('des')){
            $product->des = $request->des;
        }
        if($request->filled('cat_id')){
            $product->cat_id = $request->cat_id;
        }

      //etc
        $product->save();

        if($request->has('img')){
            $mediaOld = $product->media;
            Storage::delete(url($mediaOld->image_src));
            $mediaOld->delete();

            $media = new Media();
            $functions = new Functions();
            $media->product_id = $product->id;
            $media->image_src = $functions->SaveImageProfile($request->file('img'));
            $media->save();
        } else if ($request->has('img_deleted') && $request->img_deleted == 'true') {
            $mediaOld = $product->media;

            Storage::delete(url($mediaOld->image_src));
            $mediaOld->delete();

        }
        return response()->json(['status'=>'ok', 'message'=>$product]);
    }
    public function destroy($id)
    {
        // $credentials = $request->only('id');
        // $rules = [
        //     'id' => 'required',
        // ];
        // $validator = Validator::make($credentials, $rules);

        // if($validator->fails()) {
        //     return response()->json(['status'=>'error', 'message'=>$validator->messages()]);
        // }
        $product = Product::find($id);
        // $media = $product->media;
        // $img_name = $media->image_src;
        // Storage::delete($url);

        // File::delete($img_name);
        // unlink(public_path($img_name));


        // $media->delete();
// dd($request);
        $product->delete();
        // return redirect()->back();
        return redirect ('/products')->with('success','post removed');
    }



}
