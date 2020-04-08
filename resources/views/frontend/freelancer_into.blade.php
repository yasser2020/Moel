
@include('patiats._head')
<body>
   
@include('patiats._header')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area bg" >
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center" style="margin-bottom: 190px" >
                                {{-- <h3>مؤسسة مؤئل للتصميم والتنسيق والعمارة</h3> --}}
                                <p>
                                    المعنيين :
                                    (استشاريين – مهندسين – فنيين – منفذين – مصممين - حرفيين – عمالة حرة – شركات – مؤسسات – موهوبين) 
                                    في كافة المجالات (معماري – انشائي – ديكور – تنسيق - جرافيك - تخطيط – حدائق – زراعة - كهرباء – ميكانيكا – مرافق)                                       
                                </p>
                                <hr class="my-4" style="background: white;width: 400px">

                                <h5 style="font-weight: bold;font-size: 16pt;color: white">المميزات </h5>
                                 
                                <ol style="color: yellow;font-weight: bold; font-size: 14pt;direction: rtl;">
                                    <li  style="list-style: square">تنويع وتمكين الفرص للباحثين عن العمل</li>
                                    <li style="list-style: square">يساهم في توفير دخل اضافي وزيادة دخل الافراد</li>
                                    <li style="list-style: square">شهادة خبرة مقدمة من المؤسسة لكل فترة عمل</li>
                                    <li style="list-style: square">زيادة دخل للقائمين على رأس عمل أخر بمنحهم فرص عمل إضافية خارجية</li>
                                    <li style="list-style: square">لا يشترط الخبرة</li>
                                    <li style="list-style: square">فرص تدريب للمتخرجين الجدد مع الشهادة</li>
                                </ol>
                              
                                    <h5  style="font-weight: bold;font-size: 16pt;color: white;text-align: right;text-decoration-line: underline">الشروط والاحكام</h5>
                            <textarea readonly  rows="3" class="form-control" style="font-weight: bold;font-size: 13pt;text-align: right;overflow-y: scroll;border: 1px solid #ddd;margin-bottom: 10px">{{$setting->termsandconditions}}</textarea>
                                <div class="d-flex" style="text-align: right;direction: rtl">
                                    <input id="agree" value="agree" type="checkbox"  style="margin-left: 10px">
                                    <h5 style="font-weight: bold;font-size: 16pt;color: white;">اوفق</h5>
                                </div>
                                <div class="d-flex justify-content-center">
                                <form  action="{{route('createFreelancer')}}">
                                    
                                    <button type="submit" disabled  class="boxed-btn3 go myButton" style="margin-right: 10px">للتقديم</button>
                                </form>
                                {{-- <button type="submit" id="gogo"  class="boxed-btn3 " style="margin-right: 10px">للتقديم</button> --}}

                                {{-- <a href="{{route('createFreelancer')}}" class="boxed-btn3">للتقديم</a> --}}
                                <a href="{{URL::previous()}}" class="boxed-btn3 myButton">الرجوع</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    @push('script')
        $(document).ready(function(){
             
         
            $(document).on('click','#agree',function(e){
              
             
              if($(this).is(':checked'))
              {
                $('.go').prop('disabled',false);
                 
              }
              else
              {
                $('.go').prop('disabled',true);
                  
              }
            });
          
        });
    @endpush
    @include('patiats._footer')