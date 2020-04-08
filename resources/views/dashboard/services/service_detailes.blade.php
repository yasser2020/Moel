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
              <li class="breadcrumb-item ">الخدمات</li>
              <li class="breadcrumb-item active">تفاصيل الخدمة</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">تفاصيل خدمة</h3>
        </div>
       
          <div class="card-body">
            <div class="form-group">
              <label for="name">رقم الخدمة</label>
            <input type="number" readonly name="service_num" class="form-control" value="{{old('service_num',$service->service_num)}}" required placeholder="رقم الخدمة">
            </div>
            <div class="form-group">
              <label for="name"> المدينة</label>
              <input type="text" readonly name="city" class="form-control" value="{{old('city',$service->city)}}" required placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name"> الموقع </label>
              <input type="text" readonly name="location" class="form-control" value="{{old('location',$service->location)}}" required placeholder="الموقع">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">الوصف</label>
            <textarea readonly class="form-control" required name="service_description" id="" cols="30" rows="3" placeholder="وصف الخدمة">{{old('service_description',$service->service_description)}}</textarea>
            </div>
            <div class="form-group">
                <label for="name"> من قام بقبول الخدمة</label>
                <input type="text" readonly  class="form-control" value="{{old('city',($service->freelancerName($service->freelancer_email))->name)}}" style="background: blue;color: white">
            <a href="{{route('dashboard.showFreelancerService',$service->freelancer_email)}}" class="btn btn-info btn-sm">تفاصيل العضو</a>
              </div>

              <div class="form-group">
                <label for="name">نوع القبول</label>
              <input type="text" readonly name="city" class="form-control" value="{{$service->work_alone==0?'قبول فريق':'العمل وحدى'}}" required placeholder="المدينة">
              </div>
              @if ($service->team_memeber!=null && $service->accept_team==1)
                  
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <p class="card-title text-center" style="font-size: 9pt">من يرد الانضمام للفريق</p>
                    </div>
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover" >
                        <thead>
                          <th>#</th>
                          <th>اسم العضو</th>
                          <th>رقم الموبيل</th>
                          <th>الايميل</th>
                        </thead>
                        <tbody>
                       
                          @foreach ($service->team_memeber  as $index=>$memeber)
                          <tr>
                        <td>{{$index+1}}</td>
                        <td>{{($service->freelancerMemeber($memeber))->name}}</td>
                        <td>{{($service->freelancerMemeber($memeber))->phone_num}}</td>
                        <td>{{($service->freelancerMemeber($memeber))->email}}</td>
                      </tr>
                          @endforeach


                        </tbody>
                      </table>
                    </div>



                  </div>

                </div>
              </div>
                  
              @endif

            

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
          <a href="{{URL::previous()}}" class="btn btn-primary">الرجوع</a>
          </div>
      </div>

    </div>


      @endsection