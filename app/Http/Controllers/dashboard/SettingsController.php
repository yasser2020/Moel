<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create_settings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Settings $setting)
    {
        $request->validate([
            'phone_num'=>'required',
            'whats_num'=>'required',
            'email'=>'required',
            'termsandconditions'=>'required'
        ]);
        $setting::create($request->all());
        session()->flash('success','تم الحفظ  بنجاح');
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
        $setting=Settings::findorFail(1);
        return view('dashboard.settings.edit_settings',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Settings $setting)
    {
        $request->validate([
            'phone_num'=>'required',
            'whats_num'=>'required',
            'email'=>'required',
            'termsandconditions'=>'required',
            'account_num'=>'required',
            'logo'=>'required',
            'projects_into'=>'required',
            'about_into'=>'required',
        ]);

        $setting->update($request->all());
        session()->flash('success','تم الحفظ  بنجاح');
        return redirect()->route('dashboard.welcome');

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
}
