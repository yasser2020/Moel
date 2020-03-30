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
              <li class="breadcrumb-item active">عميل جديد </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">عميل جديد </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="{{route('dashboard.clients.store')}}" method="post" enctype="multipart/form-data">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
            <input type="text" name="name" required value="{{old('name')}}" class="form-control" placeholder="الاسم رباعى">
            </div>
            <div class="form-group">
              <label for="name">الجنس</label>
            <div class="form-check">
              <input type="radio" name="sex"  required class="form-check-input" value="m">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ذكر</label>
              <input type="radio" name="sex" required class="form-check-input" value="f">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">انثى</label>
            </div>
            <div class="form-group">
              <label for="name">الجنسية</label>
              <input type="text" name="nationality" required value="{{old('nationality')}}" class="form-control" placeholder="الجنسية">
            </div>
            <div class="form-group">
              <label for="name">المدينة</label>
              <input type="text" name="city" required value="{{old('city')}}" class="form-control" placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name">العنوان</label>
              <input type="text" name="address" required  value="{{old('address')}}" class="form-control" placeholder="العنوان">
            </div>
            <div class="form-group">
              <label for="name">رقم الجوال</label>
              <input type="text" name="phone_num" required value="{{old('phone_num')}}" class="form-control" placeholder="رقم الجوال">
            </div>
            <div class="form-group">
              <label for="name">رقم الواتس</label>
              <input type="text" name="whats_num" required value="{{old('whats_num')}}" class="form-control" placeholder="رقم الواتس">
            </div>
            <div class="form-group">
              <label for="name">الايميل</label>
              <input type="eamil" name="email" required value="{{old('email')}}" class="form-control" placeholder="الايميل">
            </div>
            <div class="form-group">
              <label for="name">الجهة التى تعرفت بها علينا او اسم الشخص رباعيا</label>
              <input type="texthow_know_us" required value="{{old('how_know_us')}}" name="how_know_us" class="form-control" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا">
            </div>
            <div class="form-group">
              <label for="name">نوع الخدمة</label>
            <div class="form-check">
              <input type="radio" name="kind_of_service" required class="form-check-input" value="سكنى">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">سكنى</label>
              <input type="radio" name="kind_of_service" required class="form-check-input" value="تجارى">
              <label class="form-check-label" for="exampleCheck1"   style="margin-left:100px">تجارى</label>
              <input type="radio" name="kind_of_service" required class="form-check-input" value="مرفق عام">
              <label class="form-check-label" for="exampleCheck1"   style="margin-left:100px">مرفق عام</label>
            </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">الخدمة</label>
              <textarea class="form-control"  required value="{{old('nationality')}}" name="service" id="" cols="30" rows="3" placeholder="الخدمة المطلوبة"></textarea>
            </div>

            <div class="form-group">
              <label for="name">اختيارى:-</label>
              <p style="color:mediumslateblue">في حالة اشتراكك بقيمة 15 ريال شهريا سيتم منحك خدمة مجانية بقيمة 5000 ريال مقابل كل خمس خدمات يتم الطلب عليها من الموقع من خلالك او10 مرات تسجيل جديد لأي عميل اخر يقوم بطلب خدمة ويكتب اسمك الرباعي  في خانة كيف تعرفت علينا .</p>
            </div>

            <div class="form-group">
              <label for="name">للاشتراك :-</label>
            <div class="form-check">
              <input type="radio" name="subscription" class="form-check-input" value="1">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">أرغب</label>
              <input type="radio" name="subscription" class="form-check-input" value="0">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">لا أرغب</label>
            </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">رقم الحساب للاشتراك :- </label>
              <p style="color:blue">ملاحظة هامة :- </p>
              <p style="color:red">نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك من خلال البريد الالكتروني المسجل .</p>
            </div>
           
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">تقدم وحفظ</button>
          </div>
        </form>
      </div>

    </div>


      @endsection