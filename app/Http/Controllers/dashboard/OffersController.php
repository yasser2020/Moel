<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Offers;

class OffersController extends Controller
{
    public function __construct()
    {
     $this->middleware('permission:read_offers')->only('index');   
     $this->middleware('permission:create_offers')->only(['create','store']); 
     $this->middleware('permission:update_offers')->only(['edit','update']); 
     $this->middleware('permission:delete_offers')->only(['destory']); 
    }
    
    public function index()
    {
        $offers=offers::latest()->paginate(5);
        return view('dashboard.offers.index',compact('offers'));
    }//end of index

    
    public function create()
    {
        return view('dashboard.offers.create_offer');
    }//end of create

    
    public function store(Request $request,Offers $offer)
    {
        // Validation
        $request->validate([
            'name'=>'required|unique:offers,name',

        ]);


        $request_data=$request->except('images[]'); 
    
        if($request->has('images'))
        {
            $images = [];
            
            foreach ($request->file('images') as $key => $image)
            {
                
                $poster=Image::make($image)
                ->resize(255,378)
                ->encode('jpg');
               
                $flage =Storage::disk('local')->put('public/images/'.$image->hashName(),(string)$poster,'public');
                if ($flage){
                    // array_push($images, $image);
                    $tempName=$image->hashName();
                    array_push($images, $tempName);   
                } 
            }
            $request_data['path']=$images;
            
        }
              
        $offer=Offers::create($request_data);
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.offers.index');
      

    }//end of store

    public function show($id)
    {
        //
    }//end of show

    public function edit(Offers $offer)
    {
        return view('dashboard.offers.edit_offer',compact('offer'));
        
    }//end of edit

    public function update(Request $request,Offers $offer)
    {
        // Validation
        $request->validate([
            'name'=>'required|unique:offers,name,'.$offer->id,
        ]);
        $request_data=$request->except('images[]'); 

        if($request->has('images'))
        {
            $this->remove_previews($offer);
            $images = [];
            foreach ($request->file('images') as $key => $image)
            {
                $poster=Image::make($image)
                ->resize(255,378)
                ->encode('jpg');
               
                $flage =Storage::disk('local')->put('public/images/'.$image->hashName(),(string)$poster,'public');
                if ($flage){
                    $tempName=$image->hashName();
                    array_push($images, $tempName);   
                } 
            }
            $request_data['path']=$images;
            
        }
              
        $offer->update($request_data);
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.offers.index');

    }//end of update

    private function remove_previews($offer)
    {
            if($offer->path !=null){
              foreach ($offer->path as $item) {
                $done=Storage::disk('local')->delete('public/images/'.$item);                
              }
            }
    }

    public function destroy(Offers $offer)
    {
        if($offer->path !=null){
        foreach ($offer->path as $item)
            $done=Storage::disk('local')->delete('public/images/'.$item);                
        }
        $offer->delete();
        session()->flash('success','تم حذف المشروع بنجاح');
        return redirect()->route('dashboard.offers.index');
    }//end of destroy
}
