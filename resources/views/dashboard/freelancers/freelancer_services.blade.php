@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">انشاء مشروع</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item ">لوحة التحكم</li>
              <li class="breadcrumb-item ">FreeLancer</li>
              <li class="breadcrumb-item active"> خدمات العضو  </li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
        <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">الرجوع</a>

      </div><!-- /.container-fluid -->
    </div>
<div class="content-body">
  <div class="card card-primary">    
        <div class="card-header">
          <h3 class="card-title text-center">خدمات العضو</h3>
        </div>  
       <div class="conatiner-fluid">
        @if ($services !=null)
        @if ($services->count()>0)
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>رقم الخدمة</th>
            <th>وصف الخدمة</th>
            <th>نوع القبول</th>
            <td>فريق العمل</td>
          </tr>
          </thead>
          <tbody>
            @foreach ($services as $index=>$service)
            <tr>   
            <td>{{$service->service_num}}</td>
            <td>{{$service->service_description}}</td>
            <td>{{$service->work_alone?'العمل وحده':'قبول مع فريق'}}</td>
            @if ($service->team_memeber==null)
                      <td></td>
                       @else
                       <?php
                       $members=$service->getTeamMemeber($service->team_memeber);
                    ?>
                    <td>{{is_array($members)?implode(array_filter($members),' - '):$members}}</td>
           @endif
            </tr>
                @endforeach 
          </tbody>
      @else
          <p>عفوا لايوجد خدمات</p>
      @endif
      @endif
       </div>
    </div>
  </div>
  </div>
      @endsection