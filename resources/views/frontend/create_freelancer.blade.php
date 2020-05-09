@include('patiats._head') 
@section('background','bg')
@include('patiats._nav') 
<div id="wrap-inner" >
  <div class="container">
     <div class="mt-4 text-center">
         <div class="title">
               <h5 class="title-heading">أستمارة تسجيل البيانات</h5>
               <span class="heading-style">
                   <i></i>
                   <i></i>
                   <i></i>
               </span>
              
           </div>
     </div>
     <div class="row">
      <div class="col-md-2"></div>   
     <div class="col-md-8">
       <div class="form-content ">
        @include('dashboard.partials._errors')
        <form method="POST" action="{{route('storeFreelancer')}}" enctype="multipart/form-data">
            @csrf
               <div class="form-tab">

                   <div class="tab-content">
                       <div class="tab-pane   active show" id="tab_a">
                           <div>
                               
                               <div class="styled-input">
                                   <input type="text"  name="name"  value="{{old('name')}}" required  >
                                   <label>الأسم الرباعي</label>
                               </div>      
                              
                               <div class="checkbox mt-5 mb-4">
                                 <label class="mr-3">النوع :</label>
                                   <input type="radio"  name="sex"  value="m" required>
                                   <label class="mr-3">ذكر</label>
                                   <input type="radio"  name="sex"  value="f" required>
                                   <label>أنثى</label>
                               </div>

                               <div class="styled-input">
                                   <input type="number"  name="identifcation_no"  value="{{old('identifcation_no')}}" >
                                   <label>رقم الهويه او البطاقة</label>
                               </div> 

                               <div class="checkbox mt-5 mb-4">
                                 <label class="mr-3">الحالة الأجتماعية</label>
                                   <input type="radio"  name="marital_status"  value="married" required>
                                   <label class="mr-3">متزوج</label>
                                   <input type="radio"  name="marital_status" value="single" required>
                                   <label>أعزب</label>
                               </div>

                               <div class="styled-input">
                                   <input type="date"  name="date_of_birth" value="{{old('date_of_birth')}}" required  >
                                   <label>تاريخ الميلاد</label>
                               </div> 

                               <div class="styled-input">
                                   <input type="text"  name="nationality" value="{{old('nationality')}}" required >
                                   <label>الجنسية</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="city" value="{{old('city')}}" required  >
                                   <label>المدينة</label>
                               </div>
                               <div class="styled-input">
                                <input type="text"  name="address" value="{{old('address')}}" required  >
                                <label>العنوان</label>
                            </div>
                               <div class="styled-input">
                                   <input type="text"  name="phone_num" value="{{old('phone_num')}}" required >
                                   <label>رقم الجوال</label>
                               </div>

                               <div class="styled-input">
                                   <input type="text"  name="whats_num" value="{{old('whats_num')}}" required >
                                   <label>رقم الواتس</label>
                               </div>

                               <div class="styled-input">
                                   <input type="email"  name="email" value="{{old('email')}}"  required>
                                   <label>الايميل</label>
                               </div>

                               <div class="styled-input">
                                   <input type="text"  name="qualification"  value="{{old('qualification')}}" required>
                                   <label>المؤهل الدراسي</label>
                               </div>
                               
                               <div class="styled-input">
                                   <input type="text"  name="graduation_year"  value="{{old('graduation_year')}}" required>
                                   <label>سنة التخرج</label>
                               </div>

                               <div class="styled-input">
                                   <input type="text"  name="grade" value="{{old('grade')}}" required >
                                   <label>التقدير (امتياز - جيد جدا)</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="faculty" value="{{old('faculty')}}" required >
                                   <label>الجامعة او الكلية</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="experince"   value="{{old('experince')}}" >
                                   <label>الخبرة</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="hopies" value="{{old('hopies')}}"  >
                                   <label>الهوايات</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="work_place" value="{{old('work_place')}}"  >
                                   <label>جهة العمل ان وجد</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="work_nature" value="{{old('work_nature')}}"  >
                                   <label>صفة العمل</label>
                               </div>
                               <div class="styled-input">
                                   <input type="text"  name="work_time" value="{{old('work_time')}}" >
                                   <label>وقت الدوام</label>
                               </div>

                               <div class="checkbox mt-5 mb-4">
                                 <label class="mr-3">أرغب بعرض اسمي وأعمالي في الموقع</label>
                                   <input type="radio"  name="show_work"  value="yes" required>
                                   <label class="mr-3">أرغب</label>
                                   <input type="radio"  name="show_work"  value="no" required>
                                   <label>لا أرغب</label>
                               </div>

                               <div class="styled-input">
                                   <input type="text"  name="how_know_us" value="{{old('how_know_us')}}" required >
                                   <label>الجهة التي تعرفت بها علينا او اسم الشخص رباعي</label>
                               </div>

                               <div class="custom-file mt-3">
                                 <input type="file" class="custom-file-input" name="cv" value="{{old('cv')}}"  id="validatedCustomFile" required>
                                 <label class="custom-file-label" for="validatedCustomFile">
                                   السيرة الذاتية
                                 </label>
                                 <div class="invalid-feedback">
                                     Example invalid custom file feedback 
                                 </div>
                               </div>

                               <div class="custom-file mt-3  ">
                                 <input type="file" class="custom-file-input"  name="graduation_certificate" value="{{old('graduation_certificate')}}" id="validatedCustomFile2" required>
                                 <label class="custom-file-label" for="validatedCustomFile">شهادة التخرج</label>
                                 <div class="invalid-feedback">
                                    Example invalid custom file feedback                                            
                                 </div>
                               </div>

                               <div class="custom-file mt-3">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile3" name="confirmation_career">
                                 <label class="custom-file-label" for="validatedCustomFile">الأعتماد المهني ان وجد </label>
                                 <div class="invalid-feedback">
                                   Example invalid custom file feedback
                                 </div>
                               </div>
                               <div class="custom-file mt-3">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile4" name="picture" >
                                 <label class="custom-file-label" for="validatedCustomFile">صورة شخصية اختياري</label>
                                 <div class="invalid-feedback">
                                   Example invalid custom file feedback
                                 </div>
                               </div>

                               <div class="custom-file mt-3">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile5" name="privews_work[]" multiple >
                                 <label class="custom-file-label" for="validatedCustomFile">نماذج اعمال</label>
                                 <div class="invalid-feedback">Example invalid custom file feedback</div>
                               </div>

                               <p class="mt-4">رقم الحساب للاشتراك : 57357</p>
                               <div class="alert alert-danger" role="alert">
                                 نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك خلال البريد الالكتروني المسجل حيث يمكنكم الدخول بعدها لمشاهدة العروض عن طريق الدخول للموقع من خلال اليوزرنيم والباسورد( رقم الهوية – ورقم الجوال ).

                               </div>
                               <div class="mt-3">
                                   <button type="submit" class="btn btn-default">
                                     حفظ
                                   </button>
                               </div>
                           </div>
                          
                       </div>

                   </div>
               </div>
           </form>
       </div>
     </div>
     </div>
 </div>
</div>
@include('patiats._footer')