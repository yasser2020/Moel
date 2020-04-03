
@include('patiats._head')
<body>
   
@include('patiats._header')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center" style="margin-bottom: 190px" >
                                <h3>مؤسسة مؤئل للتصميم والتنسيق والعمارة</h3>
                                <p>
                                    المعنيين :
                                    (استشاريين – مهندسين – فنيين – منفذين – مصممين - حرفيين – عمالة حرة – شركات – مؤسسات – موهوبين) 
                                    في كافة المجالات (معماري – انشائي – ديكور – تنسيق - جرافيك - تخطيط – حدائق – زراعة - كهرباء – ميكانيكا – مرافق)                                       
                                </p>
                                <ul style="color: yellow;font-weight: bold">
                                    <li>المميزات</li>
                                    <li>تنويع وتمكين الفرص للباحثين عن العمل.</li>
                                    <li>يساهم في توفير دخل اضافي وزيادة دخل الافراد</li>
                                    <li>شهادة خبرة مقدمة من المؤسسة لكل فترة عمل</li>
                                    <li>زيادة دخل للقائمين على رأس عمل أخر بمنحهم فرص عمل إضافية خارجية.</li>
                                    <li>لا يشترط الخبرة</li>
                                    <li>فرص تدريب للمتخرجين الجدد مع الشهادة</li>
                                </ul>
                                <a href="{{route('createFreelancer')}}" class="boxed-btn3">للتقديم</a>
                                <a href="{{URL::previous()}}" class="boxed-btn3">الرجوع</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    @include('patiats._footer')