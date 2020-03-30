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
              <li class="breadcrumb-item ">العملاء</li>
              <li class="breadcrumb-item active">بيانات العميل  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">بيانات العميل</h3>
        </div>

        <form role="form">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
            <input type="text" name="name" disabled value="{{$client->name}}"  class="form-control" placeholder="الاسم رباعى">
            </div>
            <div class="form-group">
              <label for="name">الجنس</label>
            <div class="form-check">
            <input type="radio" name="sex" disabled class="form-check-input" {{$client->sex=='m'?'checked':''}} value="m">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ذكر</label>
              <input type="radio" name="sex" disabled class="form-check-input" {{$client->sex=='f'?'checked':''}} value="f">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">انثى</label>
            </div>
            <div class="form-group">
              <label for="name">الجنسية</label>
            <input type="text" name="nationality" disabled value="{{$client->nationality}}" class="form-control" placeholder="الجنسية">
            </div>
            <div class="form-group">
              <label for="name">المدينة</label>
              <input type="text" name="city" disabled class="form-control" value="{{$client->city}}" placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name">العنوان</label>
              <input type="text" name="address" class="form-control" disabled value="{{$client->address}}" placeholder="العنوان">
            </div>
            <div class="form-group">
              <label for="name">رقم الجوال</label>
              <input type="text" name="phone_num" class="form-control" disabled value="{{$client->phone_num}}" placeholder="رقم الجوال">
            </div>
            <div class="form-group">
              <label for="name">رقم الواتس</label>
              <input type="text" name="whats_num" class="form-control" disabled value="{{$client->whats_num}}" placeholder="رقم الواتس">
            </div>
            <div class="form-group">
              <label for="name">الايميل</label>
              <input type="eamil" name="email" class="form-control" disabled value="{{$client->email}}" placeholder="الايميل">
            </div>
            <div class="form-group">
              <label for="name">الجهة التى تعرفت بها علينا او اسم الشخص رباعيا</label>
              <input type="texthow_know_us" name="how_know_us" disabled value="{{$client->how_know_us}}" class="form-control" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا">
            </div>
            <div class="form-group">
              <label for="name">نوع الخدمة</label>
            <div class="form-check">
              <input type="radio" name="kind_of_service" disabled  class="form-check-input" {{$service->kind_of_service=='سكنى'?'checked':''}} value="سكنى">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">سكنى</label>
              <input type="radio" name="kind_of_service" disabled class="form-check-input" {{$service->kind_of_service=='تجارى'?'checked':''}} value="تجارى">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">تجارى</label>
              <input type="radio" name="kind_of_service" disabled class="form-check-input" {{$service->kind_of_service=='مرفق عام'?'checked':''}} value="مرفق عام">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">مرفق عام</label>
            </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">الخدمة</label>
              <textarea class="form-control" name="service" id=""  cols="30" rows="3" placeholder="الخدمة المطلوبة">{{$service->service}}</textarea>
            </div>

            <div class="form-group">
              <label for="name">الرغبة فى الاشتراك :-</label>
            <div class="form-check">
              <input type="radio" name="subscription" disabled class="form-check-input" {{$client->subscription=='1'?'checked':''}} value="1">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">أرغب</label>
              <input type="radio" name="subscription" disabled class="form-check-input"  {{$client->subscription=='0'?'checked':''}} value="0">
              <label class="form-check-label" for="exampleCheck1"   style="margin-left:100px">لا أرغب</label>
            </div>
            </div>
           
           
          <!-- /.card-body -->

          <div class="card-footer">
            {{-- <button type="submit" class="btn btn-primary">تقدم وحفظ</button> --}}
            <a href="{{URL::back()}}" class="btn btn-primary btn-sm">الرجوع</a>
          </div>
        </form>
      
      </div>

    </div>


      @endsection