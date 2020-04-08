<header>
    <div class="header-area " style="direction: rtl">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="col-md-4" style="margin-top: 10px;margin-right: 10px;" >
                                @auth
                        
                                <li class="nav-item dropdown" style="direction: rtl; width:200px">
                                    <p style="font-weight: bold;font-size: 12pt;color:white;margin-left: 120px">مرحبا بكم</p>
                                   
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
                                    <p style="font-weight: bold;font-size: 14pt;color: #17a2b8">  {{auth()->user()->name}}</p>

                                    </a>
                                    @if (auth()->user()->hasRole('freelancer'))
                                    <?php
                                    $freelancer=Auth::user()->getFreelancer(Auth::user()->email);
                                    
                                    ?>
                                      
                                     <p style="font-weight: bold;font-size: 15pt;color: white;background: black;text-align: center">اللهم أرزقني وأرزق مني </p>
                                     @endif
                                   
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if (auth()->user()->hasRole('super_admin')||auth()->user()->hasRole('administrator'))
                                    <a class="dropdown-item" href="{{route('dashboard.welcome')}}"> <i class="fa fa-tachometer"></i> لوحة التحكم </a>
                                      @endif
                                      <a  style="color: #17a2b8" class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i>
                                      خروج
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                  </li>

                                  @else
                                  <a href="{{route('login')}}" class="myButton2 mb-2 mb-md-0 mr-0 mr-md-2" style="font-weight: bold">تسجيل الدخول</a>
                                      
                                     
                                  @endauth

                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block" style="direction: rtl">
                                @include('patiats._nav')
                            </div>
                        </div>
                        @auth
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="say_hello">
                                @if (auth()->user()->hasRole('client'))
                                <?php
                                 $count=Auth::user()->getclientServiceCount(Auth::user()->email);
                                 $client=Auth::user()->getClient(Auth::user()->email)
                
                                ?>
                                <div class="d-flex">
                                    <p style="font-weight: bold;color:white;margin-left:50px ">الحالة</p>
                                   <p class="text-center" style="font-weight: bold;font-size: 14pt;color:yellow;text-decoration-line: underline">{{$client->getClientState()}}</p>
                                    
                                </div>
                                <div class="d-flex">
                                <div class="d-flex">
                                   <p style="font-weight: bold;color:white">الخدمات</p>
                                   <button disabled="disabled" class="btn btn-primary btn-sm" style="margin-right: 10px;font-weight: bold">{{$count}}</button>
                                </div>
                                <div class="d-flex">
                                    <p style="font-weight: bold;color:white;margin-right: 10px">من سجل باسمك</p>
                                    <button disabled="disabled" class="btn btn-primary btn-sm" style="margin-right: 10px;font-weight: bold">{{$client->clients_record}}</button>
                                </div>
                       </div>
                                {{-- <p style="color: white">
                                    @for ($i = 0; $i <$count; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor                 
                                </p> --}}
                                @endif

                                {{--Freelancer--}}
                                @if (auth()->user()->hasRole('freelancer'))
                                <?php
                                //  $count=Auth::user()->getclientServiceCount(Auth::user()->email);
                                 $freelancer=Auth::user()->getFreelancer(Auth::user()->email)
                
                                ?>
                                <div class="d-flex">
                                    <p style="font-weight: bold;color:white;margin-left:50px ">الحالة</p>
                                    <p class="text-center" style="font-weight: bold;font-size: 14pt;color:yellow;text-decoration-line: underline">{{$freelancer->getFreelancerState()}}</p>
                                </div>
                                <div class="d-flex">
                                <div class="d-flex">
                                   <p style="font-weight: bold;color:white">الخدمات</p>
                                <button disabled="disabled" class="btn btn-primary btn-sm" style="margin-right: 10px;font-weight: bold">{{$freelancer->getFreelancerService($freelancer->identifcation_no)}}</button>
                                </div>
                                <div class="d-flex">
                                    <p style="font-weight: bold;color:white;margin-right: 10px">من سجل باسمك</p>
                                    <button disabled="disabled" class="btn btn-primary btn-sm" style="margin-right: 10px;font-weight: bold">{{$freelancer->clients_record}}</button>
                                </div>
                       </div>
                                {{-- <p style="color: white">
                                    @for ($i = 0; $i <$count; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor                 
                                </p> --}}
                                @endif

                            </div>
                        </div>
                        @endauth
                       
                       
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>