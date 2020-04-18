@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">العملاء المحظورين</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item ">لوحة التحكم</li>
              <li class="breadcrumb-item">الارشيف</li>
              <li class="breadcrumb-item active">العملاء</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">

          <h3 class="card-title text-center">العملاء</h3>
       
      </div>
      </div>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="">
               <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                    <input type="text"class="form-control" name="search" autofocus placeholder="اسم العميل" value="{{request()->search}}">
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
        @if ($clients->count() >0)
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">بيانات  العملاء</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>اسم العميل</th>
                    <th>الجوال </th>
                    <th>الايميل </th>
                    <th>العنوان</th>
                    <th> الخدمات</th>
                    <th>تسجيل العملاء </th>
                    <th>خيارات</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($clients as $index=>$client)
                    <tr>   
                    <td>{{$index+1}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->phone_num}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->services_count}}</td>
                    <td>{{$client->clients_record}}</td>
                    {{-- <td>
                      <form action="{{route('dashboard.clients.update',$client->id)}}" style="display:inline-block" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" {{$client->subscription=='0'?'disabled':''}} class="btn btn-primary btn-sm">
                         {{$client->subscription=='1'?'تفعيل':'لا يرغب بالاشتراك'}}  
                        </button>

                      </form>
                    </td> --}}
                    <td>
                    @if (auth()->user()->hasPermission('read_clients'))
                    <a href="{{route('dashboard.currentClientsData',$client->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"> المزيد</i></a>
                    <a href="{{route('dashboard.restore',$client->id)}}" class="btn btn-success btn-sm "><i class="fa fa-edit"> فك الحظر</i></a>

                     @else
                     <a href="" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> المزيد</i></a>
 
                    @endif
                        
                    {{-- <form action="{{route('dashboard.clients.destroy',$client->id)}}" style="display:inline-block" method="post">
                       @csrf
                       @method('delete')
                       @if (auth()->user()->hasPermission('delete_clients'))
                       <button type="submit" class="btn btn-danger btn-sm delete_client"><i class="fa fa-trash"> فك الحظر</i></button>
                           @else
                           <button type="submit" disabled class="btn btn-danger btn-sm delete_client"><i class="fa fa-trash"> Delete</i></button>
 
                       @endif
                       </form> --}}
                     
                        </td>
                      </tr>
                        @endforeach
                     
                   
                  
                 
                  </tfoot>
                </table>
                {{$clients->appends(request()->query())->links()}}
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