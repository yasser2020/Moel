@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">العروض </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item ">لوحة التحكم</li>
              <li class="breadcrumb-item active">العروض</li>
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
              @if (auth()->user()->hasPermission('create_offers'))
              <a href="{{route('dashboard.offers.create')}}"><i class="btn btn-success fa fa-plus"></i></a>
              @endif 
            </div>
          <div class="col-md-4 justify-content-center">
          <h3 class="card-title text-center">العروض</h3>
        </div>
        </div>
      </div>
      </div>
      <section class="content">
        @if ($offers->count() >0)
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">العروض</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>اسم العرض</th>
                    <th>الوصف </th>
                    
                    <th>خيارات</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($offers as $index=>$offer)
                    <tr>   
                    <td>{{$index+1}}</td>
                    <td>{{$offer->name}}</td>
                    <td>{{Str::limit($offer->description,50)}}</td>
                    {{-- <td>{{$offer->designer}}</td>
                    <td>{{$offer->executed}}</td>
                    <td>{{$offer->supervisor}}</td> --}}
                    <td>
                    @if (auth()->user()->hasPermission('update_offers'))
                    <a href="{{route('dashboard.offers.edit',$offer->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
                     @else
                     <a href="" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
 
                    @endif
              
                        @if (auth()->user()->hasPermission('delete_offers'))
                        @if($offer->path!=null)
                        <form action="{{route('dashboard.remove_offer_image',$offer->id)}}" style="display:inline-block" method="post">
                          @csrf
                          @method('delete')
                          @if (auth()->user()->hasPermission('delete_offers'))
                          <button type="submit" class="btn btn-danger btn-sm delete_offer"><i class="fa fa-trash"> حذف الصورة</i></button>
                              @else
                              <button type="submit" disabled class="btn btn-danger btn-sm delete"><i class="fa fa-trash"> Delete</i></button>
                           @endif
                          @endif
                          </form>
                        @endif
                 
                        <form action="{{route('dashboard.offers.destroy',$offer->id)}}" style="display:inline-block" method="post">
                       @csrf
                       @method('delete')
                       @if (auth()->user()->hasPermission('delete_offers'))
                       <button type="submit" class="btn btn-danger btn-sm delete_offer"><i class="fa fa-trash"> حذف</i></button>
                           @else
                           <button type="submit" disabled class="btn btn-danger btn-sm delete"><i class="fa fa-trash"> Delete</i></button>
 
                       @endif
                       </form>
                     
                        </td>
                      </tr>
                        @endforeach
                     
                   
                  
                 
                  </tfoot>
                </table>
                {{$offers->appends(request()->query())->links()}}
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