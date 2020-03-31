<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreelanceService;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services=FreelanceService::where('accept','0')->get();
        return view('home',compact('services'));
    }
}
