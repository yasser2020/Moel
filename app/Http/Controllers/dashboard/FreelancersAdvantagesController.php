<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FreelancerAdavantages;

class FreelancersAdvantagesController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancerAdvantages=freelancerAdavantages::latest()->paginate(5);
        return view('dashboard.freelancer_advantages.index',compact('freelancerAdvantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.freelancer_advantages.create');
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
            'name'=>'required',
        ]);
        $freelancerAdavantages=FreelancerAdavantages::create($request->all());
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.freelancerAdvantage.index');
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
        $id=(int)$id;
        $freelancerAdavantage=freelancerAdavantages::findOrFail($id);
        return view('dashboard.freelancer_advantages.edit',compact('freelancerAdavantage'));
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
            'name'=>'required',
        ]);
        $id=(int)$id;
        $freelancerAdavantage=freelancerAdavantages::findOrFail($id);
        $freelancerAdavantage->update($request->all());
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.freelancerAdvantage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=(int)$id;
        $freelancerAdavantage=freelancerAdavantages::findOrFail($id);
        $freelancerAdavantage->delete();
        session()->flash('success','تم حذف البيانات بنجاح');
        return redirect()->route('dashboard.freelancerAdvantage.index');
    }
    
}
