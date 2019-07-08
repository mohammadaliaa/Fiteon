<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin/projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $project = Project::all();
        return view('admin/projects/createproject',compact('project'));
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
        Project::create($form_data);
        return redirect('admin/projects')->with('success', 'project is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin/projects/editproject', compact('project'));
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
        Project::whereId($id)->update($form_data);
        return redirect('admin/projects')->with('success', 'project is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('admin/projects')->with('success', 'project is successfully deleted');
    }
}
