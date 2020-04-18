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
              <li class="breadcrumb-item ">المشاريع</li>
              <li class="breadcrumb-item active">انشاء موقع</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">انشاء موقع</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.socail.store')}}" method="post" enctype="multipart/form-data">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
              <input type="text" name="site" class="form-control" placeholder="اســـــــم الموقع">
            </div>
            <div class="form-group">
              <label for="name">اللينك</label>
              <input type="text" name="link" class="form-control" placeholder="اللينك ">
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