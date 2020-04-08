@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item ">لوحة التحكم</li>
              <li class="breadcrumb-item ">الاعدادات</li>
              <li class="breadcrumb-item active">انشاء الضبط</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">الاعدادات </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.settings.store')}}" method="post">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">رقم موبيل المؤسسة</label>
              <input type="text" required name="phone_num" class="form-control" placeholder="رقم موبيل ">
            </div>
            <div class="form-group">
                <label for="name">رقم الواتساب المؤسسة</label>
                <input type="text" required name="whats_num" class="form-control" placeholder="رقم الواتساب ">
              </div>
              <div class="form-group">
                <label for="name">ايميل المؤسسة</label>
                <input type="email" required name="email" class="form-control" placeholder="الايميل">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">الشروط والاحكام</label>
                <textarea class="form-control" required name="termsandconditions" id="" cols="30" rows="3" placeholder="الشروط والاحكام"></textarea>
              </div>
           
            
              
              </div>
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