@include('patiats._head')   
@include('patiats._header')

<div class="Reservation_area bg" >
   
    <div class="container p-0" style="direction: rtl">
        
        <div class="row no-gutters justify-content-center">
           
            <div class="col-lg-6">
                <div class="book_Form" style="background-image: linear-gradient(#6b2b06,#6b2b06);">
                    <h3 class="text-center"> استمارة تسجيل البيانات </h3>
                    
                    <div class="row ">
                        <div class="col-lg-12">
                          @include('dashboard.partials._errors')
                            <form method="POST" action="{{route('storeClient')}}">
                                @csrf
                        @auth
                              <div class="input_field mb_15 d-flex">
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 14pt">نوع الخدمة</label>
                                <input type="radio" name="kind_of_service" required  style="width:20px;" value="سكنى" >
                                <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">سكنى</label>
                                <input type="radio" class="mr-10" name="kind_of_service" required style="width:20px;" value="تجارى" >
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">تجارى</label>
                                <input type="radio" class="mr-10" name="kind_of_service" required style="width:20px;" value="مرفق عام" >
                                <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">مرفق عام</label>
                            </div> 

                              <div class="input_field mb_15">
                                <textarea class="form-control"  required value="{{old('nationality')}}" name="service" id="" cols="30" rows="3" placeholder="الخدمة المطلوبة" style="font-weight: bold"></textarea>
                              </div>
                        @else
                        

                                <div class="input_field mb_15">
                                <input type="text"  name="name" required value="{{old('name')}}" placeholder=" الاسم رباعى" style="font-weight: bold">
                                </div>

                                <div class="input_field mb_15 d-flex" >
                                  <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 14pt">الجنس</label>
                                  <input type="radio" name="sex" required style="width:20px;" value="m" >
                                  <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">ذكر</label>
                                  <input type="radio" class="mr-10" name="sex" required style="width:20px;" value="f" >
                                  <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;font-size: 14pt">انثى</label>
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
                                <input type="texthow_know_us" required value="{{old('how_know_us')}}" name="how_know_us" class="form-control" placeholder="الجهة التى تعرفت بها علينا او اسم الشخص رباعيا" style="font-weight: bold">
                              </div>
                              <div class="input_field mb_15 d-flex" >
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 14pt">نوع الخدمة</label>
                                <input type="radio" name="kind_of_service" required  style="width:20px;" value="سكنى" >
                                <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">سكنى</label>
                                <input type="radio" class="mr-10" name="kind_of_service" required style="width:20px;" value="تجارى" >
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">تجارى</label>
                                <input type="radio" class="mr-10" name="kind_of_service" required style="width:20px;" value="مرفق عام" >
                                <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">مرفق عام</label>
                            </div> 

                              <div class="input_field mb_15">
                                <textarea class="form-control"  required value="{{old('nationality')}}" name="service" id="" cols="30" rows="3" placeholder="الخدمة المطلوبة" style="font-weight: bold"></textarea>
                              </div>

                              <div class="input_field mb_15 d-flex">
                                <p style="color: white;font-weight: bold" class="text-center">في حالة اشتراكك بقيمة 15 ريال شهريا سيتم منحك خدمة مجانية بقيمة 2500 ريال مقابل كل خمس خدمات يتم الطلب عليها من الموقع من خلالك او10 مرات تسجيل جديد لأي عميل اخر يقوم بطلب خدمة ويكتب اسمك الرباعي  في خانة كيف تعرفت علينا .</p>
                              </div>
                              
                              <div class="input_field mb_15 d-flex" >
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;margin-left:10px;font-size: 14pt">الاشتراك</label>
                                <input type="radio" name="subscription" required style="width:20px;" value="1" >
                                <label for="" class="mt-10"  style="font-weight: bold;color: white;margin-right: 10px;margin-left: 10px;font-size: 14pt">ارغب</label>
                                <input type="radio" class="mr-10" name="subscription" required style="width:20px;" value="0" >
                                <label for="" class="mt-10" style="font-weight: bold;color: white;margin-right: 10px;font-size: 14pt">لا ارغب</label>
                            </div>
                            <div class="input_field mb_15 d-flex">
                            <p style="color: white;font-weight: bold" class="text-center">رقم الحساب للاشتراك : {{$setting->account_num}}</p>
                            </div>
                            <div class="input_field mb_15 d-flex">
                              <p style="background:red;color: white" class="text-center">نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك من خلال البريد الالكتروني المسجل .</p>
                            </div>
                            @endauth
                                <div class="input_field mb_15 text-center">
                                <button type="submit" class="myButton" style="font-weight: bold;background: #bfa58b">حفظ</button>        
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