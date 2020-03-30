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
              <li class="breadcrumb-item active">بيانات المتقدم  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-warning">
        @if ($type=='privews_work')
        <div class="form-group text-center">
          <div style="margin-top:20px">
          @foreach ($freelancer->privews_work as $item)
              <img src="{{$freelancer->getImage($item)}}" style="border:solid"> 
          @endforeach
        </div>
      </div>
        @endif














        
        
           
               
          <!-- /.card-body -->

          <div class="card-footer">
            {{-- <button type="submit" class="btn btn-primary">تقدم وحفظ</button> --}}
            <a href="{{route('dashboard.freelancers.show',$freelancer->id)}}" class="btn btn-primary btn-sm">الرجوع</a>
          </div>
        </form>
      
      </div>

    </div>


      @endsection