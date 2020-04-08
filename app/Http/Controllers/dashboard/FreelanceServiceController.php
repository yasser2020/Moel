<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FreelanceService;
class FreelanceServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services=FreelanceService::whenSearch($request->search)->where('done',0)->paginate(5);
        return view('dashboard.services.index',compact('services'));
    }

    public function archive(Request $request)
    {
        $services=FreelanceService::whenSearch($request->search)->where('done',1)->paginate(5);
        return view('dashboard.services.archive_services',compact('services'));
    }

    public function serviceDetail($id)
    {
        $id=(int)$id;
        $service=FreelanceService::findOrFail($id);
        return view('dashboard.services.service_detailes',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create_service');
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
            'service_num'=>'required|unique:freelance_services,service_num',
            'city'=>'required',
            'location'=>'required',
            'service_description'=>'required',
        ]);
    
        FreelanceService::create($request->all());
        session()->flash('success','تم إضافة البيانات بنجاح');
        return redirect()->route('dashboard.services.index');
        
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
    public function edit(FreelanceService $service)
    {
        
     return view('dashboard.services.edit_service',compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,FreelanceService $service)
    {
         // Validation
         $request->validate([
            'service_num'=>'required|unique:freelance_services,service_num,'.$service->id,
            'city'=>'required',
            'location'=>'required',
            'service_description'=>'required',
        ]);
        $service->update($request->all());
        session()->flash('success','تم تعديل البيانات بنجاح');
        return redirect()->route('dashboard.services.index');
        
    }

      public function putInArachive($id)
      {
          $id=(int)$id;
          $service=FreelanceService::FindOrFail($id);
          $service->done=1;
          if($service->work_alone==1)
          {
              $service->team_memeber=null;
          }
          $service->update();
          session()->flash('success','تم  ارشفة الخدمة  بنجاح');
          return redirect()->route('dashboard.services.index');
      }

      public function reactiveService($id)
      {
          $id=(int)$id;
          $service= $service=FreelanceService::FindOrFail($id);
          $service->accept=0;
          $service->work_alone=0;
          $service->accept_team=0;
        //   $service->client_accept_id=0;
        //   $service->team_memeber=null;
          $service->done=0;
          $service->freelancer_email=null;
          $service->update();
          session()->flash('success','تم  اعادة تفعيل الخدمة  بنجاح');
          return redirect()->route('dashboard.services.index');
      }

    

      


    
}
