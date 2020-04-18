<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Client;
use App\Freelancer;
use App\Service;
class WelcomeController extends Controller
{
    public function index()
    {
        $projects=Project::get();
        $new_clients=Client::where('done',0)->Where('archive',0)->get();
        $clients=Client::where('done',1)->where('block',0)->get();
        $new_freelancers=Freelancer::where('done',0)->get();
        $freelancers=Freelancer::where('done',1)->where('block',0)->get();
        $services=Service::where('done',0)->get();
        
        return view('dashboard.welcome',compact('projects','new_clients','clients','new_freelancers','freelancers','services'));
    }
}
