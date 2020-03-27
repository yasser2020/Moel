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
              <li class="breadcrumb-item active"> FreeLancer </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title text-center">  استمارة تسجيل Freelancer   </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
         <form role="form" action="" method="post" enctype="multipart/form-data">
            @csrf 
            @include('dashboard.partials._errors')
          <div class="card-body">
            <div class="form-group">
              <label for="name">الاســــــــم</label>
              <input type="text" name="name"  class="form-control" placeholder="الاسم رباعى">
            </div>
            <div class="form-group">
              <label for="name">الجنس</label>
            <div class="form-check">
              <input type="radio" name="sex" class="form-check-input" value="m">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ذكر</label>
              <input type="radio" name="sex" class="form-check-input" value="f">
              <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">انثى</label>
            </div>
            <div class="form-group">
                <label for="name">رقم الهواية/ الاقامة</label>
                <input type="text" name="identifcation_no" class="form-control" placeholder="رقم الهوية او الاقامة">
              </div>
              <div class="form-group">
                <label for="name">الحالة الاجتماعية</label>
                <input type="text" name="marital_status" class="form-control" placeholder="الحالة الاجماعية اعزب متزوج">
              </div>
              <div class="form-group">
                <label> تاريخ الميلاد:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="date" name="date_of_birth" class="form-control ltr" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
              <label for="name">الجنسية</label>
              <input type="text" name="nationality" class="form-control" placeholder="الجنسية">
            </div>
            <div class="form-group">
              <label for="name">المدينة</label>
              <input type="text" name="city" class="form-control" placeholder="المدينة">
            </div>
            <div class="form-group">
              <label for="name">العنوان</label>
              <input type="text" name="address" class="form-control" placeholder="العنوان">
            </div>
            <div class="form-group">
              <label for="name">رقم الجوال</label>
              <input type="text" name="phone_num" class="form-control" placeholder="رقم الجوال">
            </div>
            <div class="form-group">
              <label for="name">رقم الواتس</label>
              <input type="text" name="whats_num" class="form-control" placeholder="رقم الواتس">
            </div>
            <div class="form-group">
              <label for="name">الايميل</label>
              <input type="eamil" name="email" class="form-control" placeholder="الايميل">
            </div>
            <div class="form-group">
                <label for="name">المؤهل</label>
                <input type="text" name="qualification" class="form-control" placeholder="المؤهل الدراسى">
              </div>
              <div class="form-group">
                <label for="name">سنة التخرج</label>
                <input type="number" name="graduation_year" class="form-control" placeholder="سنة التخرج">
              </div>
              <div class="form-group">
                <label for="name">التقدير</label>
                <input type="text" name="grade" class="form-control" placeholder="امتياز جيدجدا جيد مقبول">
              </div>
              <div class="form-group">
                <label for="name"> الجامعة / الكلية</label>
                <input type="text" name="faculty" class="form-control" placeholder="الجامعة او الكلية ">
              </div>
              <div class="form-group">
                <label for="name"> الخبرة</label>
                <input type="text" name="experince" class="form-control" placeholder=" الخبرة">
              </div>
              <div class="form-group">
                <label for="name"> هوايات اخرى</label>
                <input type="text" name="hopies" class="form-control" placeholder=" هوايات اخرى">
              </div>
              <div class="form-group">
                <label for="name"> جهة العمل إن وجد</label>
                <input type="text" name="work_place" class="form-control" placeholder=" جهة العمل ان وجد">
              </div>
              <div class="form-group">
                <label for="name">صفة العمل</label>
                <input type="text" name="work_nature" class="form-control" placeholder=" صفة العمل">
              </div>
              <div class="form-group">
                <label for="name"> وقت الدوام</label>
                <input type="text" name="work_time" class="form-control" placeholder=" وقت الدوام">
              </div>
              <div class="form-group">
                <label for="images">السيرة الذاتية</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"name="cv" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">السيرة الذاتية</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="images">شهادة التخرج</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"name="graduation_certificate" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile"> شهادة التخرج</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="images"> الاعتماد المهنى إن وجد</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"name="confirmation_career" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">الاعتماد المهنى إن وجد </label>
                  </div>
                </div>
              </div>
             
              <div class="form-group">
                <label for="images">  صورة شخصة (اختيارى) </label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"name="picture" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">صورة شخصية </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="images">نماذج اعمال</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"name="privews_work" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">نماذج اعمال</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="name">ارغب بعرض اعمالى واسمى فى المواقع</label>
              <div class="form-check">
                <input type="radio" name="show_work" class="form-check-input" value="yes">
                <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">ارغب</label>
                <input type="radio" name="show_work" class="form-check-input" value="no">
                <label class="form-check-label" for="exampleCheck1"  style="margin-left:100px">لا ارغب</label>
              </div>
              
            <div class="form-group">
              <label for="name">الجهة التى تعرفت بها علينا او اسم الشخص رباعيا</label>
              <input type="texthow_know_us" name="how_know_us" class="form-control" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا">
            </div>
                      
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">تقدم وحفظ</button>
          </div>
        </form>
      </div>

    </div>


      @endsection