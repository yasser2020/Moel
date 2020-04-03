<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\Freelancer;
use App\User;


class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $freelancers=Freelancer::whenSearch($request->search)->where('done',0)->paginate(5);
        return view('dashboard.freelancers.index',compact('freelancers'));
    }
    public function currentFreelancers(Request $request)
    {
        $freelancers=Freelancer::whenSearch($request->search)->where('done',1)->paginate(5);
        return view('dashboard.freelancers.current_freelancers',compact('freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.freelancers.create_freelancer');
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
            'experince'=>'sometimes',
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
         session()->flash('success','تم إضافة البيانات بنجاح');
         return redirect()->route('dashboard.freelancers.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancer $freelancer)
    {
       return view('dashboard.freelancers.show_freelancer',compact('freelancer'));
    }
    public function showFreelancerService($email)
    {
        $freelancer=Freelancer::where('identifcation_no',$email)->first();
       return view('dashboard.freelancers.show_freelancer',compact('freelancer'));
    }

    public function showPage($id,$type)
    {
        $id=(int)$id;
        $freelancer=Freelancer::findOrFail($id);
        if($type=='cv')
        {
            $path=str_replace('/','\\',$freelancer->cv);
            return response()->file(storage_path().'\\'.'app\\'.$path);
        }

        if($type=='graduation_certificate')
        {
            $path=str_replace('/','\\',$freelancer->graduation_certificate);
            return response()->file(storage_path().'\\'.'app\\'.$path);
        }
        if($type=='confirmation_career')
        {
            $path=str_replace('/','\\',$freelancer->confirmation_career);     
            return response()->file(storage_path().'\\'.'app\\'.$path);
         
        }
        if($type=='privews_work')
        {
            
         return view('dashboard.freelancers.show_image',compact('freelancer','type'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        $freelancer->done="1";
        $freelancer->update();
        session()->flash('success','تم  تفعيل اشتراك العميل بنجاح');
        //add client to users table to login using email and phone_num as password
        $user= User::create([
            'name' => $freelancer->name,
            'email' => $freelancer->identifcation_no,
            'password' => Hash::make($freelancer->phone_num),
            'user_type'=>'freelancer',
        ]);
        $user->attachRole('freelancer');
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelancer $freelancer)
    {
        
        if($freelancer->cv !=null)
        { 
            Storage::disk('local')->delete($freelancer->cv);   
        }
        if($freelancer->graduation_certificate !=null)
        { 
            Storage::disk('local')->delete($freelancer->graduation_certificate); 
           
        }
        if($freelancer->confirmation_career !=null)
        { 
            Storage::disk('local')->delete($freelancer->confirmation_career); 
            
        }
        if($freelancer->picture !=null)
        { 
            Storage::disk('local')->delete('public/images/'.$freelancer->picture); 
             
        }
        if($freelancer->privews_work !=null)
        { 
            foreach ($freelancer->privews_work as $privew_work) {
               
                Storage::disk('local')->delete('public/privews_works/'.$privew_work);
                              
              }
        }
        $user=User::where('email',($freelancer->email));
        $user->delete();
        $freelancer->delete();
        session()->flash('success','تم حذف البيانات بنجاح');
         return redirect()->back();
        
       
        
    }
    
}
