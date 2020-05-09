
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
                    <div>
                    @auth
                    @if (auth()->user()->hasRole('super_admin'))
                    <a href="{{route('dashboard.welcome')}}"   class="btn btn-default" >لوحة التحكم</a>
                    @endif
                    @if (auth()->user()->hasRole('client'))
                    <?php
                    $count=Auth::user()->getclientServiceCount(Auth::user()->email);
                    $client=Auth::user()->getClient(Auth::user()->email)
     
                   ?>
                    <a href="{{route('createClient')}}"  class="btn btn-default mt-50" >خدمة العملاء</a>
                    <div class="row mb-2 my-5 justify-content-center" >
                    {{-- new projects --}}
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box ">
                        <div class="inner">
                        <h3 class="text-center custom">{{$client->clients_record}}</h3>

                            <p class="font-20">من سجل باسمك</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        </div>
                        
                        
                    </div>

                    {{-- new projects --}}
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box ">
                        <div class="inner">
                        <h3 class="text-center custom">{{$count}}</h3>

                            <p class="font-20">عدد الخدمات</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        </div>
                    </div>
                    </div>  
                    
                    @endif
                    @if (auth()->user()->hasRole('freelancer'))
                                <?php
                                 $freelancer=Auth::user()->getFreelancer(Auth::user()->email)
                
                                ?>
                                <p class="font-20">اللهم أرزقني وأرزق مني</p>
                                 {{-- new projects --}}
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box ">
                        <div class="inner">
                        <h3 class="text-center custom">{{$freelancer->clients_record}}</h3>

                            <p class="font-20">من سجل باسمك </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        </div>
                    </div>
                   
                          
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
@endsection
@if (auth()->user()->hasRole('freelancer'))
@section('services')
<div class="container">
    <div class="title">
            <h5 class="title-heading">الخدمات</h5>
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
    </div>
@include('frontend.freelancer_services')
</div>
@endsection
@endif