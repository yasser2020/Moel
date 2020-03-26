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
              <li class="breadcrumb-item active">انشاء مشروع</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">انشاء مشروع</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.projects.store')}}" method="post" enctype="multipart/form-data">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
              <input type="text" name="name" class="form-control" placeholder="اســـــــم المشروع">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">الوصف</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="نبذة عن المشروع"></textarea>
            </div>
            <div class="form-group">
              <label for="images">الصور</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file"name="images[]" multiple="multiple" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">الصور</label>
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