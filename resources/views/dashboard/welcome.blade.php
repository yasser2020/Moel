@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-2 justify-content-center" >
        
         {{-- new projects --}}
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3 class="text-center">{{$projects->count()}}</h3>

                <p>عدد المشاريع</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('dashboard.projects.index')}}"  class="small-box-footer">المشاريع<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>


{{-- new Clients --}}
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3 class="text-center">{{$new_clients->count()}}</h3>
                
                <p>عدد العملاء الجدد</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            <a href="{{route('dashboard.clients.index')}}" class="small-box-footer">العملاء الجدد<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>

          {{-- new Freelancers --}}
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3 class="text-center">{{$new_freelancers->count()}}</h3>

                <p>عدد المتقدمين الجدد</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('dashboard.freelancers.index')}}" class="small-box-footer">المتقدمين الجدد<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>

          
          {{-- new services --}}
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <h3 class="text-center">{{$services->count()}}</h3>

                <p>عدد الخدمات الواردة</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('dashboard.clientServices.index')}}"  class="small-box-footer">الخدمات الواردة<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>

           {{-- new current clients --}}
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <h3 class="text-center">{{$clients->count()}}</h3>

                <p>عدد العملاء المشتركين</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('dashboard.currentClients')}}" class="small-box-footer">العملاء المشتركين<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>

           {{-- new current freelancer --}}
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3 class="text-center">{{$freelancers->count()}}</h3>

                <p>عدد الاعضاء المشتركين</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            <a href="{{route('dashboard.currentFreelancers')}}" class="small-box-footer">الاعضاء المشتركين<i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>


          










        </div><!-- /.row -->

        
            



      </div><!-- /.container-fluid -->
    </div>
    
@endsection