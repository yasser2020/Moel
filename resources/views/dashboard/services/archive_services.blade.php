@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">الخدمات </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item ">لوحة التحكم</li>
              <li class="breadcrumb-item active">الخدمات</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          
          <h3 class="card-title text-center">الخدمات</h3>
      
      </div>
      </div>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="">
               <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                    <input type="text"class="form-control" name="search" autofocus placeholder="رقم الخدمة" value="{{request()->search}}">
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="form-group">
                      <button class="btn btn-primary " type="submit"><i class="fa fa-search"> بحث</i></button>
                      
                    </div>
                  </div>
             </div><!-- end of row -->
             
      
      
            </form><!--end of form -->
          </div> <!-- end of col-12 -->
        </div> <!-- end or row -->
        @if ($services->count() >0)
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">الخدمات</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>رقم الخدمة</th>
                    <th>المدينة</th>
                    <th>الموقع </th>
                    <th>الوصف </th>
                    <th>القبول</th>
                    {{-- <th>خيارات</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($services as $index=>$service)
                    <tr style="font-size: 10pt;font-weight: bold">   
                    <td>{{$index+1}}</td>
                    <td>{{$service->service_num}}</td>
                    <td>{{$service->city}}</td>
                    <td>{{$service->location}}</td>
                    <td>{{Str::limit($service->service_description,50)}}</td>
                    @if ($service->accept==1)
                    <td style="color:green">تم القبول</td>
                    @else
                    <td style="color:red"> لم يتم القبول</td>
                    @endif
                  
                    <!-- <td>
                    @if (auth()->user()->hasPermission('update_freelancerServices'))
                    <a href="{{route('dashboard.services.edit',$service->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
                    @if ($service->accept==1)
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-check"> تفعيل</i></a>
                    
                    @endif
                     @else
                     <a href=""  class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
 
                    @endif
                        
                        <form action="" style="display:inline-block" method="post">
                       @csrf
                       @method('delete')
                       @if (auth()->user()->hasPermission('delete_freelancerServices'))
                       <button type="submit" disabled class="btn btn-danger btn-sm delete_service"><i class="fa fa-trash"> حذف</i></button>
                           @else
                           <button type="submit" disabled class="btn btn-danger btn-sm delete_service"><i class="fa fa-trash"> Delete</i></button>
 
                       @endif
                       </form>
                     
                        </td> -->
                      </tr>
                        @endforeach
                     
                   
                  
                 
                  </tfoot>
                </table>
                {{$services->appends(request()->query())->links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        @else 
        <h3 style="font-weight:400">عفوا لايوجد بيانات</h3>
        @endif

      </section>
    </div>


      @endsection