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
              <li class="breadcrumb-item ">العروض</li>
              <li class="breadcrumb-item active">تعدبل على المشروع</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">تعديل العرض</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.offers.update',$offer->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('put')
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
            <input type="text" name="name" class="form-control" value="{{old('name',$offer->name)}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">الوصف</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="نبذة عن المشروع">{{old('name',$offer->description)}}</textarea>
            </div>
           
            <div class="form-group">
              <label for="images">الصور</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file"name="images[]" multiple="multiple" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">الصور</label>
                </div>
              </div>
              <div class="form-group">
                  <div style="margin-top:20px">
                  @foreach ($offer->path as $item)
                      <img src="{{$offer->getImage($item)}}"  alt="offer Image"> 
                     
                  @endforeach
                 
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