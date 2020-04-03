<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Service;
use App\Freelancer;
use App\Project;
class WelcomeController extends Controller
{
    public function index()
    {
        // $freelancer=Freelancer::latest()->first();
        $projects=Project::first();
        return view('frontend.welcome',compact('projects'));
    }
   
    public function about()
    {
        return view('frontend.about');
    }
    public function createClient()
    {
        return view('frontend.create_client');
    }
    public function freelancerInto()
    {
        return view('frontend.freelancer_into');
    }
    public function clientInto()
    {
        return view('frontend.client_into');
    }
    public function createFreelancer()
    {
        return view('frontend.create_freelancer');
    }
    public function success($type)
    {
        
        return view('frontend.success_page');
    }
}
