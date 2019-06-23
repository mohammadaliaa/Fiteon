<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin/articles/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/articles/createarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'article_title' => 'required|max:255',
        //     'article_des' => 'required',
        //     'article_title_fa' => 'max:255',
        //     'article_des_fa' => '',

        // ]);
        // $article = Article::create($validatedData);

        // return redirect('admin/articles')->with('success', 'article is successfully saved');

        $request->validate([
            'title' => 'required|max:255',
            'des' => 'required',
            'title_fa' => 'max:255',
            'des_fa' => 'required',
            'image' => 'required|image',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'des' => $request->des,
            'title_fa' => $request->title_fa,
            'des_fa' => $request->des_fa,
            'image' => $new_name,
        );
        Article::create($form_data);
        return redirect('admin/articles')->with('success', 'article is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artice = Article::find($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin/articles/editarticle', compact('article'));
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
        // $validatedData = $request->validate([
        //     'article_title' => 'required|max:255',
        //     'article_des' => 'required',
        //     'article_title_fa' => 'max:255',
        //     'article_des_fa' => '',

        // ]);
        // Article::whereId($id)->update($validatedData);

        // return redirect('admin/articles')->with('success', 'article is successfully updated');



        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
             $request->validate([
                'title' => 'required|max:255',
                'des' => 'required',
                'title_fa' => 'max:255',
                'des_fa' => '',
                'image'=>'image',
            ]);
            $image_name = rand() . '.' . $image->
            getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }else{
         $request->validate([
                'title' => 'required|max:255',
                'des' => 'required',
                'title_fa' => 'max:255',
                'des_fa' => '',
                ]);
        }
        $form_data = array(
            'title' => $request->title,
            'des' => $request->des,
            'title_fa' => $request->title_fa,
            'des_fa' => $request->des_fa,
            'image' => $image_name,
        );
        Article::whereId($id)->update($form_data);
        return redirect('admin/articles')->with('success', 'article is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('admin/articles')->with('success', 'article is successfully deleted');
    }
}
