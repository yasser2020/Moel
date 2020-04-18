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
              <li class="breadcrumb-item ">مواقع التواصل </li>
              <li class="breadcrumb-item active">تعديل موقع</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">تعديل موقع</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.socail.update',$social_network->id)}}" method="post">
            @csrf 
            @method('put')
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
            <input type="text" name="site" class="form-control"  value="{{old('site',$social_network->site)}}">
            </div>
            <div class="form-group">
              <label for="name">اللينك</label>
              <input type="text" name="link" class="form-control"  value="{{old('link',$social_network->link)}}">
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