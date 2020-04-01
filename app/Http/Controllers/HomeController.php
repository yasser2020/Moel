<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreelanceService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services=FreelanceService::where('done','0')->get();
        return view('home',compact('services'));
    }

    public function acceptService($id,$type)
    {
        $id=(int)$id;
        $service=FreelanceService::findOrFail($id);
        $service->accept=1;
        $service->freelancer_email=Auth::user()->email;
        if($type=="only")
        {
            $service->work_alone=1;
        }
        else
        {
            $service->accept_team=1;
        }
       
        $service->update();
        
    }

    public function jointoTeam($id)
    {
        $id=(int)$id;
        $service=FreelanceService::findOrFail($id);
        $members=[];
        $flage=false;
        if($service->team_memeber !=null)
        {
        foreach ($service->team_memeber as $key => $member) {
            if(Auth::user()->email==$member)
            {
                $flage=true;
            break; 
            }
            array_push($members,$member);
        }
       }
       if(!$flage){
       if(Auth::user()->email!=$service->freelancer_email){
           if(Auth::user()->email)
        array_push($members,Auth::user()->email);
        $service->team_memeber=$members;
        $service->update(); 
       }
       }
    }

    public function checkFreelancerEmail($members,$email)
    {
        foreach ($memebers as $key => $memebr) {
            
        }
        
    }

   

    

}
