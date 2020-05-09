@include('patiats._head')   
@section('background','bg')
@include('patiats._nav')  
 <!--Hero intro-->
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
        <form method="POST" action="{{route('storeClient')}}">
            @csrf
               <div class="form-tab">

                   <div class="tab-content">
                       <div class="tab-pane   active show" id="tab_a">
                           <div>
                            @auth
                            <div class="checkbox mt-5 mb-4">
                              <label class="mr-3">نوع الخدمة</label>
                                <input type="radio"  name="kind_of_service" value="سكنى" required>
                                <label class="mr-3">سكنى</label>
                                <input type="radio"  name="kind_of_service" value="تجارى" required>
                                <label class="mr-3">تجارى</label>
                                <input type="radio"  name="kind_of_service" value="مرفق عام" required>
                                <label class="mr-3">مرفق عام</label>
                                
                            </div>
  
                            <div class="">
                                <textarea class="form-control" name="service" placeholder="الخدمة المطلوبة"></textarea>
                            </div>
                            @else 

                            <div class="styled-input">
                              <input type="text"  name="name"  value="{{old('name')}}" required >
                              <label>الأسم الرباعي</label>
                          </div>      
                          <div class="checkbox mt-5 mb-4">
                            <label class="mr-3">النوع</label>
                              <input type="radio"  name="sex" value="m" required>
                              <label class="mr-3">ذكر</label>
                              <input type="radio"  name="sex" value="f" required>
                              <label>انثى</label>
                          </div>
                          <div class="styled-input">
                              <input type="text"  name="nationality" value="{{old('nationality')}}" required >
                              <label>الجنسية</label>
                          </div>
                          <div class="styled-input">
                              <input type="text"  name="city"  value="{{old('city')}}" required>
                              <label>المدينة</label>
                          </div>
                          <div class="styled-input">
                            <input type="text"  name="address"  value="{{old('address')}}" required>
                            <label>العنوان</label>
                        </div>
                          <div class="styled-input">
                              <input type="text"  name="phone_num"  value="{{old('phone_num')}}" required  >
                              <label>رقم الجوال</label>
                          </div>

                          <div class="styled-input">
                              <input type="text"  name="whats_num" value="{{old('whats_num')}}" required >
                              <label>رقم الواتس</label>
                          </div>

                          <div class="styled-input">
                              <input type="email"  name="email"  value="{{old('email')}}" required  >
                              <label>الايميل</label>
                          </div>

                          <div class="styled-input">
                              <input type="text"  name="how_know_us"  value="{{old('how_know_us')}}" required >
                              <label>الجهة التي تعرفت بها علينا او اسم الشخص رباعي</label>
                          </div>

                          <div class="checkbox mt-5 mb-4">
                            <label class="mr-3">نوع الخدمة</label>
                              <input type="radio"  name="kind_of_service" value="سكنى" required>
                              <label class="mr-3">سكنى</label>
                              <input type="radio"  name="kind_of_service" value="تجارى" required>
                              <label class="mr-3">تجارى</label>
                              <input type="radio"  name="kind_of_service" value="مرفق عام" required>
                              <label class="mr-3">مرفق عام</label>
                              
                          </div>

                          <div class="">
                              <textarea class="form-control" name="service"  value="{{old('service')}}" placeholder="الخدمة المطلوبة"></textarea>
                          </div>

                          <p class="mt-4">
                            في حالة اشتراكك بقيمة 15 ريال شهريا سيتم منحك خدمة مجانية بقيمة 2500 ريال مقابل كل خمس خدمات يتم الطلب عليها من الموقع من خلالك او10 مرات تسجيل جديد لأي عميل اخر يقوم بطلب خدمة ويكتب اسمك الرباعي في خانة كيف تعرفت علينا .
                          </p>

                          <div class="checkbox mt-5 mb-4">
                            <label class="mr-3">الأشتراك</label>
                              <input type="radio"  name="subscription"  value="1" required>
                              <label class="mr-3">أرغب</label>
                              <input type="radio"  name="subscription"  value="0" required>
                              <label>لا أرغب</label>
                          </div>

                          <p class="mt-4">رقم الحساب للاشتراك : 57357</p>
                          <div class="alert alert-danger " role="alert">
                            <p>
                              نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك خلال البريد الالكتروني المسجل حيث يمكنكم الدخول بعدها لمشاهدة العروض عن طريق الدخول للموقع من خلال اليوزرنيم والباسورد( رقم الهوية – ورقم الجوال ).
                            </p>

                          </div>
                            @endauth
                               
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