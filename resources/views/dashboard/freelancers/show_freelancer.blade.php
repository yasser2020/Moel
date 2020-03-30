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
    <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title text-center">بيانات المتقدم</h3>
        </div>
       
        <form role="form">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            
            <div class="col-12">
              <div class="row justify-content-center justify-items-center">
                <div class="col-md-4 mb-10">
                    <img src="{{$freelancer->picture_path}}" style="width:150px;hight:200px;border:solid" alt="">
                </div>
              <div class="col-md-2 mb-10">
                <a href="{{route('dashboard.showImage',[$freelancer->id,'type'=>'cv'])}}"   target="_blank" class="btn btn-warning ">السيرة الذاتية </a>
              </div>
              <div class="col-md-2 mb-10">
                <a href="{{route('dashboard.showImage',[$freelancer->id,'type'=>'graduation_certificate'])}}" target="_blank"  class="btn btn-warning">شهادة التخرج</a>
              </div>
              <div class="col-md-2 mb-10">
                @if ($freelancer->confirmation_career==null)
                <a  href="#" class="btn btn-warning"> الاعتماد المهنى لايوجد</a>

                @else
                <a  href="{{route('dashboard.showImage',[$freelancer->id,'type'=>'confirmation_career'])}}" target="_blank" class="btn btn-warning">الاعتماد المهنى </a>
                @endif
              </div>
              <div class="col-md-2 mb-10">
                <a href="{{route('dashboard.showImage',[$freelancer->id,'type'=>'privews_work'])}}"   target="_blank" class="btn btn-warning "> نماذج اعمال</a>
              </div>
            </div>
            </div>
            <div class="form-group">
              <label for="name">الاســــــــم</label>
            <input type="text" name="name" disabled value="{{$freelancer->name}}"  class="form-control btn btn-primary bt-sm" style="font-weight: bold" placeholder="الاسم رباعى">
            </div>
            <div class="form-group">
              <label for="name">الجنس</label>
            <div class="form-check">
            <input type="radio" name="sex" readonly class="form-check-input" {{$freelancer->sex=='m'?'checked':''}} value="m">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ذكر</label>
              <input type="radio" name="sex" readonly class="form-check-input" {{$freelancer->sex=='f'?'checked':''}} value="f">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">انثى</label>
            </div>
            <div class="form-group">
                <label for="name">رقم الهواية/ الاقامة</label>
                <input type="text" name="identifcation_no" disabled class="form-control btn btn-primary btn-sm" style="font-weight: bold"  value="{{old('identifcation_no',$freelancer->identifcation_no)}}" placeholder="رقم الهوية او الاقامة">
              </div>
              <div class="form-group">
                <label for="name">الحالة الاجتماعية</label>
              <div class="form-check">
                <input type="radio" name="marital_status" readonly  {{$freelancer->marital_status=='married'?'checked':''}} class="form-check-input" value="married">
                <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">متزوج</label>
                <input type="radio" name="marital_status" readonly {{$freelancer->marital_status=='single'?'checked':''}} class="form-check-input" value="single">
                <label class="form-check-label" for="exampleCheck1"   style="margin-left:100px">اعزب</label>
                <input type="radio" name="marital_status" readonly {{$freelancer->marital_status=='widow'?'checked':''}} class="form-check-input" value="widow">
                <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ارمل</label>
              </div>
              <div class="form-group">
                <label> تاريخ الميلاد:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="date_of_birth" disabled class="form-control btn btn-primary btn-sm" value="{{old('date_of_birth',$freelancer->date_of_birth)}}" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
              <label for="name">الجنسية</label>
            <input type="text" name="nationality" disabled value="{{$freelancer->nationality}}" class="form-control btn btn-primary bt-sm" placeholder="الجنسية">
            </div>
            <div class="form-group">
              <label for="name">المدينة</label>
              <input type="text" name="city" disabled class="form-control btn btn-primary bt-sm" value="{{$freelancer->city}}" placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name">العنوان</label>
              <input type="text" name="address" class="form-control btn btn-primary bt-sm" disabled value="{{$freelancer->address}}" placeholder="العنوان">
            </div>
            <div class="form-group">
              <label for="name">رقم الجوال</label>
              <input type="text" name="phone_num" class="form-control btn btn-primary bt-sm" disabled value="{{$freelancer->phone_num}}" placeholder="رقم الجوال">
            </div>
            <div class="form-group">
              <label for="name">رقم الواتس</label>
              <input type="text" name="whats_num" class="form-control btn btn-primary bt-sm" disabled value="{{$freelancer->whats_num}}" placeholder="رقم الواتس">
            </div>
            <div class="form-group">
              <label for="name">الايميل</label>
              <input type="eamil" name="email" class="form-control btn btn-primary bt-sm" disabled value="{{$freelancer->email}}" placeholder="الايميل">
            </div>
            <div class="form-group">
                <label for="name">المؤهل</label>
                <input type="text" name="qualification" value="{{old('nationality',$freelancer->qualification)}}" disabled class="form-control btn btn-primary btn-sm" placeholder="المؤهل الدراسى">
              </div>
              <div class="form-group">
                <label for="name">سنة التخرج</label>
                <input type="number" name="graduation_year" value="{{old('graduation_year',$freelancer->graduation_year)}}" disabled class="form-control btn btn-primary bt-sm" placeholder="سنة التخرج">
              </div>
              <div class="form-group">
                <label for="name">التقدير</label>
                <input type="text" name="grade" value="{{old('grade',$freelancer->grade)}}" class="form-control btn btn-primary bt-sm" disabled placeholder="امتياز جيدجدا جيد مقبول">
              </div>
              <div class="form-group">
                <label for="name"> الجامعة / الكلية</label>
                <input type="text" name="faculty" value="{{old('faculty',$freelancer->faculty)}}" disabled class="form-control btn btn-primary bt-sm" placeholder="الجامعة او الكلية ">
              </div>
              <div class="form-group">
                <label for="name"> الخبرة</label>
                <input type="text" name="experince" value="{{old('experince',$freelancer->experince)}}" disabled class="form-control btn btn-primary bt-sm" placeholder=" الخبرة">
              </div>
              <div class="form-group">
                <label for="name"> هوايات اخرى</label>
                <input type="text" name="hopies" value="{{old('hopies',$freelancer->hopies)}}" disabled class="form-control btn btn-primary bt-sm" placeholder=" هوايات اخرى">
              </div>
              <div class="form-group">
                <label for="name"> جهة العمل إن وجد</label>
                <input type="text" name="work_place" value="{{old('work_place',$freelancer->work_place)}}" disabled class="form-control btn btn-primary bt-sm" placeholder=" جهة العمل ان وجد">
              </div>
              <div class="form-group">
                <label for="name">صفة العمل</label>
                <input type="text" name="work_nature" value="{{old('work_nature',$freelancer->work_nature)}}" disabled class="form-control btn btn-primary bt-sm" placeholder=" صفة العمل">
              </div>
              <div class="form-group">
                <label for="name"> وقت الدوام</label>
                <input type="text" name="work_time" value="{{old('work_time',$freelancer->work_time)}}" disabled class="form-control btn btn-primary bt-sm" placeholder=" وقت الدوام">
              </div>
            <div class="form-group">
              <label for="name">الجهة التى تعرفت بها علينا او اسم الشخص رباعيا</label>
              <input type="texthow_know_us" name="how_know_us" disabled value="{{$freelancer->how_know_us}}"  class="form-control btn btn-primary bt-sm" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا">
            </div>

          <div class="card-footer">
            {{-- <button type="submit" class="btn btn-primary">تقدم وحفظ</button> --}}
            <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">الرجوع</a>
          </div>
        </form>
      
      </div>

    </div>


      @endsection