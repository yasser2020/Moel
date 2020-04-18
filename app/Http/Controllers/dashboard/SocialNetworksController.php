<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialNetwork;

class SocialNetworksController extends Controller
{
    public function __construct()
    {
     $this->middleware('permission:read_projects')->only('index');   
     $this->middleware('permission:create_projects')->only(['create','store']); 
     $this->middleware('permission:update_projects')->only(['edit','update']); 
     $this->middleware('permission:delete_projects')->only(['destory']); 
    }
    public function index()
    {
        $socail_networks=SocialNetwork::latest()->paginate(5);
        return view('dashboard.socialNetworks.index',compact('socail_networks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.socialNetworks.create_social');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation
         $request->validate([
            'site'=>'required|unique:social_networks,site',
            'link'=>'required',

        ]);

        $socialNetwork=SocialNetwork::create($request->all());
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.socail.index');

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
        $social_network=SocialNetwork::findOrFail($id);
        return view('dashboard.socialNetworks.edit_social',compact('social_network'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $social_network=SocialNetwork::findOrFail($id);
         // Validation
         $request->validate([
            'site'=>'required|unique:social_networks,site,'.$social_network->id,
            
            'link'=>'required',

        ]);
        $social_network->update($request->all());
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.socail.index');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social_network=SocialNetwork::findOrFail($id);
        $social_network->delete();
        session()->flash('success','تم حذف البيانات بنجاح');
        return redirect()->route('dashboard.socail.index');
    }
}
