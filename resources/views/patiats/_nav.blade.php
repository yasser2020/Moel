<?php
use App\Settings;
use App\SocialNetwork;
   $setting=Settings::findOrFail(1);
   $socail_networks=SocialNetwork::get();
?>
<div class="home"> 
    <nav class="navbar navbar-expand-md @yield('background')">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.rtl.html">
          <img src="{{asset('assets/images/logo.jpg')}}">
        </a>
        
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler hamburger" type="button"  >
          <!-- <i class="fas fa-align-justify text-white"></i> -->
          <span class="hamburger-box">
          <span class="hamburger-label"></span>
          <span class="hamburger-inner"></span>
        </span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link"  href="{{route('index')}}">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('whoUs')}}">من نحن</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link"  href="{{route('projects')}}">المشاريع</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('privacy')}}">الخصوصية</a>
            </li> 
            @auth
            <li class="" >
              @if (auth()->user()->hasRole('client'))
              <?php
               $count=Auth::user()->getclientServiceCount(Auth::user()->email);
               $client=Auth::user()->getClient(Auth::user()->email)

              ?>
              <span class="mr-20 welcome" >{{$client->getClientState()}}</span>
              @endif
              @if (auth()->user()->hasRole('freelancer'))
                                <?php
                                //  $count=Auth::user()->getclientServiceCount(Auth::user()->email);
                                 $freelancer=Auth::user()->getFreelancer(Auth::user()->email)
                                 
                                ?>
                                 <span class="mr-20 welcome font-20" >{{$freelancer->getFreelancerState()}}</span>
                                @endif
                      <div class="dropdown show">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{auth()->user()->name}}
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          @if (auth()->user()->hasRole('super_admin'))
                          <a class="dropdown-item" href="{{route('dashboard.welcome')}}" >لوحة التحكم <i class="fa fa-tachometer"></i></a>
                          @else
                          <a class="dropdown-item" href="{{route('editUser',[Auth::user()->email,'profile'])}}" >تعديل الملف الشخصى</a>
                          @endif
                          <a class="dropdown-item" href="{{route('editUser',[Auth::user()->email,'pass'])}}" >تغير الباسورد</a>
                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"> 
                                      خروج
                                      <i class="fa fa-sign-out"></i>
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          {{-- <a class="dropdown-item" href="#">خروج</a> --}}
                        </div>
                      </div>
            </li> 
            @else
            <li class="nav-item login " >
              <a class="nav-link" href="{{route('login')}}">تسجيل دخول</a>
            </li> 
            @endauth
          </ul>
        </div> 
      </div>  
    </nav>
  </div>