<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Service;
use App\Freelancer;
use App\Project;
use App\Settings;
class WelcomeController extends Controller
{
    public function index()
    {
        // $freelancer=Freelancer::latest()->first();
        $projects=Project::first();
        $setting=Settings::findOrFail(1);
        return view('frontend.welcome',compact('projects','setting'));
    }
   
    public function about()
    {
        return view('frontend.about');
    }
    public function createClient()
    {
        $setting=Settings::findOrFail(1);
        return view('frontend.create_client',compact('setting'));
    }
    public function freelancerInto()
    {
        $setting=Settings::findOrFail(1);
        return view('frontend.freelancer_into',compact('setting'));
    }
    public function clientInto()
    {
        $setting=Settings::findOrFail(1);
        return view('frontend.client_into',compact('setting'));
    }
    public function createFreelancer()
    {
        $setting=Settings::findOrFail(1);
        return view('frontend.create_freelancer',compact('setting'));
    }

    public function projects()
    {
        $projects=Project::first();
        return view('frontend.projects',compact('projects'));
    }
}
