<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ClientAdavantages;

class ClientsAdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientAdvantages=ClientAdavantages::latest()->paginate(5);
        return view('dashboard.client_advantages.index',compact('clientAdvantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.client_advantages.create');
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
        $clientAdavantages=ClientAdavantages::create($request->all());
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.clientAdvantage.index');
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
        $clientAdavantage=ClientAdavantages::findOrFail($id);
        return view('dashboard.client_advantages.edit',compact('clientAdavantage'));
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
        $clientAdavantage=ClientAdavantages::findOrFail($id);
        $clientAdavantage->update($request->all());
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.clientAdvantage.index');
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
        $clientAdavantage=ClientAdavantages::findOrFail($id);
        $clientAdavantage->delete();
        session()->flash('success','تم حذف البيانات بنجاح');
        return redirect()->route('dashboard.clientAdvantage.index');
    }
}
