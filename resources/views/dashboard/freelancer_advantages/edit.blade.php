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
              <li class="breadcrumb-item ">المميزات للاعضاء</li>
              <li class="breadcrumb-item active">تعديل ميزة</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">تعديل ميزة</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.freelancerAdvantage.update',$freelancerAdavantage->id)}}" method="post">
            @csrf 
            @method('put')
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الميزة</label>
            <input type="text" name="name" class="form-control" value="{{old('name',$freelancerAdavantage->name)}}">
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