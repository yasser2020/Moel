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
              <li class="breadcrumb-item active">الخدمات الواردة</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <div style="display:flex">
            <div class="col-md-4">
              @if (auth()->user()->hasPermission('create_freelancerServices'))
              <a href="{{route('dashboard.services.create')}}"><i class="btn btn-success fa fa-plus"></i></a>
              @endif 
            </div>
          <div class="col-md-4 justify-content-center">
          <h3 class="card-title text-center">الخدمات </h3>
        </div>
        </div>
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
        @if ($services!=null && $services->count() >0)
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">الخدمات الواردة</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>نوع الخدمة</th>
                    <th>الخدمة </th>
                    <th>اسم مقدم الخدمة </th>
                    <th>خيارات</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($services->get() as $index=>$service)
                    <tr>   
                    <td>{{$index+1}}</td>
                    <td>{{$service->kind_of_service}}</td>
                    <td>{{Str::limit($service->service,50)}}</td>
                    <td>{{$service->getClientName($service->client_id)}}</td>
                    <td>
                    @if (auth()->user()->hasPermission('update_freelancerServices'))
                    <a href="{{route('dashboard.currentClientsData',$service->client_id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> المزيد</i></a>
                     @else
                     <a href="" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
 
                    @endif
                        
                    <form action="{{route('dashboard.clientServices.update',$service->id)}}" style="display:inline-block" method="post">
                       @csrf
                       @method('put')
                       @if (auth()->user()->hasPermission('delete_freelancerServices'))
                       <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"> حذف</i></button>
                           @else
                           <button type="submit" disabled class="btn btn-danger btn-sm delete"><i class="fa fa-trash"> Delete</i></button>
 
                       @endif
                       </form>
                     
                        </td>
                      </tr>
                        @endforeach
                     
                   
                  
                 
                  </tfoot>
                </table>
                {{-- {{$services->appends(request()->query())->links()}} --}}
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