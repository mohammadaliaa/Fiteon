<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Info::count();
        $infos = Info::all();
        return view('admin/infos/index', compact('infos','count'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = Info::all();
        return view('admin/infos/createinfo',compact('info'));
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
            'phone' => '',
            'email' => '',
            'mobile' => '',
            'fax' => '',
            'location' => '',
            'address_1' => '',
            'address_2' => '',
            'address_3' => '',
            ]);

            $form_data = array(
                'phone' => $request->phone,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'fax' => $request->fax,
                'location' => $request->location,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'address_3' => $request->address_3,

            );
        Info::create($form_data);
        return redirect('admin/infos')->with('success', 'info is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Info::find($id);
        return view('contactusView', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::findOrFail($id);
        return view('admin/infos/editinfo', compact('info'));
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
         $request->validate([
                'phone' => '',
                'email' => '',
                'mobile' => '',
                'fax' => '',
                'location' => '',
                'address_1' => '',
                'address_2' => '',
                'address_3' => '',
                ]);

                $form_data = array(
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'fax' => $request->fax,
                    'location' => $request->location,
                    'address_1' => $request->address_1,
                    'address_2' => $request->address_2,
                    'address_3' => $request->address_3,

                );
        Info::whereId($id)->update($form_data);
        return redirect('admin/infos')->with('success', 'info is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::findOrFail($id);
        $info->delete();
        return redirect('admin/infos')->with('success', 'info is successfully deleted');
    }
}
