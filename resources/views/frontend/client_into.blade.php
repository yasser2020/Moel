
@include('patiats._head')
<body>
   
@include('patiats._header')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" style="background: black">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center" style="margin-bottom: 190px" >
                                
                              

                                <h3>المميزات </h3>
                                <hr class="my-4" style="background: white;width: 400px">
                                 
                                <ol style="color: yellow;font-weight: bold; font-size: 14pt;direction: rtl;">
                                    <li  style="list-style: square">تنويع وتمكين الفرص للباحثين عن العمل</li>
                                    <li style="list-style: square">يساهم في توفير دخل اضافي وزيادة دخل الافراد</li>
                                    <li style="list-style: square">شهادة خبرة مقدمة من المؤسسة لكل فترة عمل</li>
                                    <li style="list-style: square">زيادة دخل للقائمين على رأس عمل أخر بمنحهم فرص عمل إضافية خارجية</li>
                                    <li style="list-style: square">لا يشترط الخبرة</li>
                                    <li style="list-style: square">فرص تدريب للمتخرجين الجدد مع الشهادة</li>
                                </ol>
                              
                                    <h5  style="font-weight: bold;font-size: 16pt;color: white;text-align: right;text-decoration-line: underline">الشروط والاحكام</h5>
                                <textarea  rows="3" class="form-control" style="font-weight: bold;font-size: 13pt;text-align: right;overflow-y: scroll;border: 1px solid #ddd;margin-bottom: 10px">
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام
                               الشروط والاحكام

                                </textarea>
                                <div class="d-flex" style="text-align: right;direction: rtl">
                                    <input id="agree" value="agree" type="checkbox"  style="margin-left: 10px">
                                    <h5 style="font-weight: bold;font-size: 16pt;color: white;">اوفق</h5>
                                </div>
                                <div class="d-flex justify-content-center">
                                <form action="{{route('createClient')}}" method="get">
                                    <button type="submit"  disabled class="boxed-btn3 go" style="margin-right: 10px">للتقديم</button>
                                </form>
                                
                                {{-- <a href="{{route('createFreelancer')}}" class="boxed-btn3">للتقديم</a> --}}
                                <a href="{{URL::previous()}}" class="boxed-btn3">الرجوع</a>
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
                
                $('.go').prop("disabled",false);
                 
              }
              else
              {
                
                  
              }
            });
          
        });
    @endpush
    @include('patiats._footer')