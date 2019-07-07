<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin/services/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('admin/services/createservice',compact('service'));
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
            'title' => 'required|max:255',
            'des' => 'required',
            'title_fa' => 'max:255',
            'des_fa' => '',
            'image' => 'image',
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
        Service::create($form_data);
        return redirect('admin/services')->with('success', 'service is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin/services/editservice', compact('service'));
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
        Service::whereId($id)->update($form_data);
        return redirect('admin/services')->with('success', 'service is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect('admin/services')->with('success', 'service is successfully deleted');
    }
}
