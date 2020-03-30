<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Freelancer;
use App\User;
use App\Client;
use App\Service;
class ClientController extends Controller
{
    public function storeClient(Request $request)
    {
         
        if(Auth::check())
        {
            
            $request->validate([
                'kind_of_service'=>'required',
                'service'=>'required',
            ]);

        $request_service_data=$request->only(['kind_of_service','service']);
        $client=Client::whereEmail(auth()->user()->email)->first();
        $clienId=$client->id;
        $request_service_data['client_id']=$clienId;
        $service=Service::create($request_service_data);         
        }
        else
        {

        $request->validate([
            'name'=>'required|min:10',
            'sex'=>'required',
            'nationality'=>'required',
            'city'=>'required',
            'address'=>'required',
            'phone_num'=>'required',
            'whats_num'=>'required',
            'email'=>'required|unique:clients,email',
            'how_know_us'=>'required',
            'kind_of_service'=>'required',
            'service'=>'required',
        ]);

        $request_client_data=$request->except(['kind_of_service','service']);
        $client=Client::create($request_client_data);
        $client_name=$request->how_know_us;
        $client_obj=Client::whereName($client_name)->first();
        if($client_obj!=null)
        {
            $client_obj->clients_record= ($client_obj->clients_record)+1;
            $client_obj->update();
        }
       
        $request_service_data=$request->only(['kind_of_service','service']);
        $request_service_data['client_id']=$client->id;
        $service=Service::create($request_service_data);
    }
        session()->flash('success','تم اضافة البيانات بنجاح');
        return redirect()->route('index');
        // return redirect()->route('success',["type"=>'client']);
    }
    public function storeFreelancer(Request $request)
    {
        $request->validate([
            'name'=>'required|min:10',
            'sex'=>'required',
            'identifcation_no'=>'required',
            'marital_status'=>'required',
            'date_of_birth'=>'required',
            'nationality'=>'required',
            'city'=>'required',
            'address'=>'required',
            'phone_num'=>'required',
            'whats_num'=>'required',
            'email'=>'required|unique:freelancers,email',
            'qualification'=>'required',
            'graduation_year'=>'required',
            'grade'=>'required',
            'faculty'=>'required',
            'experince'=>'required',
            // 'hopies'=>'required',
            'cv'=>'required',
            'confirmation_career'=>'sometimes',
            'picture'=>'sometimes',
            'privews_work'=>'sometimes',
            'graduation_certificate'=>'required',
            'show_work'=>'required',
            'how_know_us'=>'required',
        ]);
        $request_data=$request->except(['cv','graduation_certificate','confirmation_career','picture','privews_work']);
      //check cv file
        if($request->has('cv'))
        {
            $filenameWithEx=$request->file('cv')->getClientOriginalName();
            $filename=pathinfo($filenameWithEx,PATHINFO_FILENAME);
            $fileEx=$request->file('cv')->getClientOriginalExtension();
            $fileToStore=$filename.'_'.time().'.'.$fileEx;
            $path=$request->file('cv')->storeAs('public/cvs',$fileToStore);
            $request_data['cv']=$path;
        }
         //check graduation_certificate file
         if($request->has('graduation_certificate'))
         {
             $filenameWithEx=$request->file('graduation_certificate')->getClientOriginalName();
             $filename=pathinfo($filenameWithEx,PATHINFO_FILENAME);
             $fileEx=$request->file('graduation_certificate')->getClientOriginalExtension();
             $fileToStore=$filename.'_'.time().'.'.$fileEx;
             $path=$request->file('graduation_certificate')->storeAs('public/graduation_certificates',$fileToStore);
             $request_data['graduation_certificate']=$path;
         }

         //check confirmation_career file
         if($request->has('confirmation_career'))
         {
             $filenameWithEx=$request->file('confirmation_career')->getClientOriginalName();
             $filename=pathinfo($filenameWithEx,PATHINFO_FILENAME);
             $fileEx=$request->file('confirmation_career')->getClientOriginalExtension();
             $fileToStore=$filename.'_'.time().'.'.$fileEx;
             $path=$request->file('confirmation_career')->storeAs('public/confirmation_careers',$fileToStore);
             $request_data['confirmation_career']=$path;
         }

          //check picture file
          if($request->has('picture'))
          {
            $poster=Image::make($request->picture)
            ->resize(150,200)
            ->encode('jpg',50);
            Storage::disk('local')->put('public/images/'.$request->picture->hashName(),(string)$poster,'public');
            $path=$request->picture->hashName();
            $request_data['picture']=$path;
          }

          //perviews_work
          if($request->has('privews_work'))
          {
              
              $images = [];
              
              foreach ($request->file('privews_work') as $key => $image)
              {
                  
                  $poster=Image::make($image)
                  ->resize(255,378)
                  ->encode('jpg');
                 
                  $flage =Storage::disk('local')->put('public/privews_works/'.$image->hashName(),(string)$poster,'public');
                  if ($flage){
                      // array_push($images, $image);
                      $tempName=$image->hashName();
                      array_push($images, $tempName);   
                  } 
              }
              $request_data['privews_work']=$images;
              
          }

         Freelancer::create($request_data);
         session()->flash('success','تم اضافة البيانات بنجاح');
         return redirect()->route('index');



    }
}
