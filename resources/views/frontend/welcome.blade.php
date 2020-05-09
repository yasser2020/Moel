
@extends('frontend.app')
@section('content')
     <!--Hero intro-->
     <div id="wrap-intro" >
        
        <div class="container">
                        
            <div class="intro-cont row">
                <div class="col-lg-8">
                    @include('dashboard.partials._session')
                    <h3 class="mb-3 "> {{$setting->logo}}</h3>
                    <div>
                    <p>{{$setting->projects_into}}</p>
                    <div>
                    @auth
                    @if (auth()->user()->hasRole('client'))
                    <a href="{{route('createClient')}}"  class="btn btn-default" >طلب خدمة  </a>
                    @endif
                    @if (auth()->user()->hasRole('freelancer'))
                    <a href="{{route('home')}}" class="btn btn-default">عرض الخدمات</a>    
                     @endif
                    @else
                    <a href="{{route('clientPage')}}"  class="btn btn-default" >خدمة العملاء</a>
                    <a href="{{route('freelancerPage')}}" class=" btn btn-secondary ml-2"> للتقديم (freelance) </a>
                    @endauth
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @yield('aboutus')
     @if ($offers !=null)
     @include('frontend.offers') 
         @endif
@endsection