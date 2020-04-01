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
              <li class="breadcrumb-item ">الخدمات</li>
              <li class="breadcrumb-item active">تعديل خدمة</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">تعديل خدمة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.services.update',$service->id)}}" method="post">
            @csrf 
            @method('put')
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">رقم الخدمة</label>
            <input type="number" name="service_num" class="form-control" value="{{old('service_num',$service->service_num)}}" required placeholder="رقم الخدمة">
            </div>
            <div class="form-group">
              <label for="name"> المدينة</label>
              <input type="text" name="city" class="form-control" value="{{old('city',$service->city)}}" required placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name"> الموقع </label>
              <input type="text" name="location" class="form-control" value="{{old('location',$service->location)}}" required placeholder="الموقع">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">الوصف</label>
            <textarea class="form-control" required name="service_description" id="" cols="30" rows="3" placeholder="وصف الخدمة">{{old('service_description',$service->service_description)}}</textarea>
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
          </div>
        </form>
      </div>

    </div>


      @endsection