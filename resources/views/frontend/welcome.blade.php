
@include('patiats._head')   
@include('patiats._header')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" style="background: black">
        @include('dashboard.partials._session')
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center" style="margin-bottom: 200px">
                        <div class="col-xl-9 col-md-9 col-md-12" style="direction: rtl">
                            <div class="slider_text text-center">
                        
                                <h3>مؤسسة مؤئل للتصميم والتنسيق والعمارة</h3>
                                @auth
                                @if (auth()->user()->hasRole('client'))
                                <a href="{{route('createClient')}}"  class="boxed-btn3 btn btn-primary mb-50" style="font-weight: bold;font-size: 15pt">خدمة العملاء</a>
                                @endif
                                @if (auth()->user()->hasRole('freelancer'))
                                <a href="{{route('home')}}" class="boxed-btn3 btn btn-primary mb-50" style="font-weight: bold;font-size: 15pt">تصفح الخدمات</a>
                                <p>
                                    المعنيين :
                                    (استشاريين – مهندسين – فنيين – منفذين – مصممين - حرفيين – عمالة حرة – شركات – مؤسسات – موهوبين) 
                                    في كافة المجالات (معماري – انشائي – ديكور – تنسيق - جرافيك - تخطيط – حدائق – زراعة - كهرباء – ميكانيكا – مرافق)                                       
                                </p>
                                <ul style="color: white;font-weight: bold">
                                    <li>المميزات</li>
                                    <li>تنويع وتمكين الفرص للباحثين عن العمل.</li>
                                    <li>يساهم في توفير دخل اضافي وزيادة دخل الافراد</li>
                                    <li>شهادة خبرة مقدمة من المؤسسة لكل فترة عمل</li>
                                    <li>زيادة دخل للقائمين على رأس عمل أخر بمنحهم فرص عمل إضافية خارجية.</li>
                                    <li>لا يشترط الخبرة</li>
                                    <li>فرص تدريب للمتخرجين الجدد مع الشهادة</li>
                                </ul>
                                 @endif
                                @else
                                <a href="{{route('clientPage')}}" class="boxed-btn3 btn btn-primary mb-50" style="font-weight: bold;font-size: 15pt;background:#FFD600">خدمة العملاء</a>
                                <a href="{{route('freelancerPage')}}" class="boxed-btn3 btn btn-primary  mb-50" style="font-weight: bold;font-size: 15pt;background:#FFD600"> للتقديم (freelance) </a>
                                @endauth
                                <h4 style="font-weight: bold;color: white;font-size: 15pt">تقدم مؤسسة موئل منظومة متكاملة من الخدمات، وتأخذ على عاتقها الاحترافية والابتكار في جميع مشاريعها من خلال مجموعة من المهندسين والفنيين المتخصصين والمصممين، إضافة للنظام الإداري المتابع لكافة تفاصيل المشروعات التي تم وسيتم تنفيذها، وخدمات الضمان على مدار العام. </h4>
                                <hr class="my-4" style="background: white;width: 400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Delicious area start  -->
  
   @include('frontend.projects')
   
    <!-- footer_start  -->
   @include('patiats._footer')

 