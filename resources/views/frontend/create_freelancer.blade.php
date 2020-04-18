@include('patiats._head')   
@include('patiats._header')

<div class="Reservation_area bg">
   
    <div class="container p-0" style="direction: rtl">
        
        <div class="row no-gutters justify-content-center">
           
            <div class="col-lg-6">
                <div class="book_Form" style="background-image: linear-gradient(#3B4371,#3B4371);">
                    <h3 class="text-center"> استمارة تسجيل البيانات </h3>
                    
                    <div class="row ">
                        <div class="col-lg-12">
                          @include('dashboard.partials._errors')
                        <form method="POST" action="{{route('storeFreelancer')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="input_field mb_15">
                                <input type="text"  name="name" required value="{{old('name')}}" placeholder=" الاسم رباعى" style="font-weight: bold">
                                </div>

                                <div class="input_field mb_15 d-flex">
                                  <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 12pt">الجنس</label>
                                  <input type="radio" name="sex" required style="width:20px;" value="m" >
                                  <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">ذكر</label>
                                  <input type="radio" class="mr-10" name="sex" required style="width:20px;" value="f" >
                                  <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;font-size: 12pt">انثى</label>
                              </div>
                              <div class="input_field mb_15">
                              <input type="text" required name="identifcation_no" class="form-control" min="10" value="{{old('identifcation_no')}}" placeholder="رقم الهوية او الاقامة">
                            </div>
                            <div class="input_field mb_15 d-flex" >
                              <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 12pt">الحالة الاجتماعية</label>
                              <input type="radio" name="marital_status" required  style="width:20px;" value="married" >
                              <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">متزوج</label>
                              <input type="radio" class="mr-10" name="marital_status" required style="width:20px;" value="single" >
                              <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">اعزب</label>
                              {{-- <input type="radio" class="mr-10" name="marital_status" required style="width:20px;" value="مرفق عام" >
                              <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">ارمل</label> --}}
                          </div> 
                          <div class="input_field mb_15">
                          <input type="text" required name="date_of_birth" date_formate='yyyy/mm/dd'    class="form-control" value="{{old('date_of_birth')}}" placeholder="تاريخ الميلاد" onfocus="(this.type='date')" style="font-weight: bold" >
                        </div>
                              <div class="input_field mb_15">
                                <input type="text"  name="nationality" required value="{{old('nationality')}}" class="form-control" placeholder="الجنسية" style="font-weight: bold">
                              </div>

                              <div class="input_field mb_15">
                                <input type="text" name="city" required value="{{old('city')}}" class="form-control" placeholder="المدينة" style="font-weight: bold">
                              </div>

                              
                              <div class="input_field mb_15">
                                <input type="text" name="address" required  value="{{old('address')}}" class="form-control" placeholder="العنوان" style="font-weight: bold">
                              </div>

                              
                              <div class="input_field mb_15">
                                <input type="text" name="phone_num" required value="{{old('phone_num')}}" class="form-control" placeholder="رقم الجوال" style="font-weight: bold">
                              </div>
                              
                              <div class="input_field mb_15">
                                <input type="text" name="whats_num" required value="{{old('whats_num')}}" class="form-control" placeholder="رقم الواتس" style="font-weight: bold">
                              </div>
                              
                              <div class="input_field mb_15">
                                <input type="eamil" name="email" required value="{{old('email')}}" class="form-control" placeholder="الايميل" style="font-weight: bold">
                              </div>

                              <div class="input_field mb_15">
                              <input type="text" required name="qualification" value="{{old('nationality')}}" class="form-control" placeholder="المؤهل الدراسى" style="font-weight: bold">
                              </div>

                              <div class="input_field mb_15">
                              <input type="number" required name="graduation_year" value="{{old('graduation_year')}}" class="form-control" placeholder="سنة التخرج" style="font-weight: bold">
                            </div>

                            <div class="input_field mb_15">
                            <input type="text" required name="grade" value="{{old('grade')}}" class="form-control" placeholder="التقدير الدراسى (امتياز - جيد جدا)" style="font-weight: bold">
                            </div>

                            <div class="input_field mb_15">
                            <input type="text" required name="faculty" value="{{old('faculty')}}" class="form-control" placeholder="الجامعة او الكلية " style="font-weight: bold">
                          </div>
                         
                          <div class="input_field mb_15">
                          <input type="text" name="experince" value="{{old('experince')}}" class="form-control" placeholder=" الخبرة" style="font-weight: bold">
                          </div>

                          <div class="input_field mb_15">
                            <input type="text" name="hopies" value="{{old('hopies')}}" class="form-control" placeholder=" هوايات اخرى" style="font-weight: bold">
                          </div>
                          <div class="input_field mb_15">
                          <input type="text" name="work_place" value="{{old('work_place')}}" class="form-control" placeholder=" جهة العمل ان وجد" style="font-weight: bold">
                          </div>

                          <div class="input_field mb_15">
                          <input type="text" name="work_nature" value="{{old('work_nature')}}" class="form-control" placeholder=" صفة العمل" style="font-weight: bold">
                          </div>

                          <div class="input_field mb_15">
                            <input type="text" name="work_time" value="{{old('work_time')}}" class="form-control" placeholder=" وقت الدوام" style="font-weight: bold">
                            </div>

                          <div class="input_field mb_15">
                          <div class="custom-file">
                            <input type="file"name="cv" required value="{{old('cv')}}"    class="custom-file-input">
                            <label class="custom-file-label text-center" style="font-weight: bold;font-size: 12pt;" >السيرة الذاتية</label>
                          </div>
                        </div>
                        <div class="input_field mb_15">
                        <div class="custom-file">
                          <input type="file" required name="graduation_certificate" class="custom-file-input">
                          <label class="custom-file-label text-center"  style="font-weight: bold;font-size: 12pt;"> شهادة التخرج</label>
                        </div>
                      </div>
                      <div class="input_field mb_15">
                      <div class="custom-file">
                        <input type="file"name="confirmation_career" class="custom-file-input">
                        <label class="custom-file-label text-center"  style="font-weight: bold;font-size: 12pt;">الاعتماد المهنى إن وجد </label>
                       </div>
                      </div>

                      <div class="input_field mb_15">
                      <div class="custom-file">
                        <input type="file"name="picture" class="custom-file-input">
                        <label class="custom-file-label text-center" style="font-weight: bold;font-size: 12pt;" >صورة شخصية (اختيارى)</label>
                      </div>
                    </div>

                    <div class="input_field mb_15">
                    <div class="custom-file">
                      <input type="file"name="privews_work[]" multiple class="custom-file-input">
                      <label class="custom-file-label text-center" style="font-weight: bold;font-size: 12pt;" >نماذج اعمال</label>
                    </div>
                  </div>

                  <div class="input_field mb_15 d-flex">
                    <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 12pt;font-weight: bold">ارغب بعرض اسمى واعمالى فى الموقع</label>
                    <input type="radio" name="show_work" required  style="width:20px;" value="yes" >
                    <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">ارغب</label>
                    <input type="radio" class="mr-10" name="show_work" required style="width:20px;" value="no" >
                    <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 12pt">لا ارغب</label>  
                </div> 
                <div class="input_field mb_15">
                  <input type="texthow_know_us" required value="{{old('how_know_us')}}" name="how_know_us" class="form-control" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا" style="font-weight: bold">
                </div>  
                <div class="input_field mb_15 d-flex">
                  <p style="color: white;font-weight: bold" class="text-center">رقم الحساب للاشتراك : {{$setting->account_num}}</p>
                  </div>
                <div class="input_field mb_15">
                <p style="background:red;color: white" class="text-center">نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك خلال البريد الالكتروني المسجل حيث يمكنكم الدخول بعدها لمشاهدة العروض عن طريق الدخول للموقع من خلال اليوزرنيم والباسورد( رقم الهوية    – ورقم الجوال ).</p>
                </div>
                                <div class="input_field mb_15 text-center">
                                <button type="submit" class="myButton" style="font-weight: bold;background: #17a2b8">حفظ</button>        
                                </div>
                            </form>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
{{-- @include('patiats._footer') --}}