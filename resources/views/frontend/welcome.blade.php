
@include('patiats._head')   
@include('patiats._header')
    <!-- header-end -->

 <!-- slider_area_start -->
 <div class="slider_area bg"  >
    @include('dashboard.partials._session')
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center" style="margin-bottom: 200px">
                    <div class="col-xl-9 col-md-9 col-md-12" style="direction: rtl">
                        <div class="slider_text text-center">
                    
                        <h3 class="shadow demotext">{{$setting->logo}}</h3>
                            @auth
                            @if (auth()->user()->hasRole('client'))
                            <a href="{{route('createClient')}}"  class="boxed-btn3 btn btn-primary mb-50 myButton" style="font-weight: bold;font-size: 15pt">خدمة العملاء</a>
                            @endif
                            @if (auth()->user()->hasRole('freelancer'))
                            <a href="{{route('home')}}" class="boxed-btn3 btn btn-primary mb-50 myButton" style="font-weight: bold;font-size: 15pt">تصفح الخدمات</a>
            
                             @endif
                            @else
                            <a href="{{route('clientPage')}}"  class=" mb-50 myButton" >خدمة العملاء</a>
                            <a href="{{route('freelancerPage')}}" class=" mb-50 myButton"> للتقديم (freelance) </a>
                            @endauth
                            <h4 class="" style="font-weight: bold;color: white;font-size: 15pt">تقدم مؤسسة موئل منظومة متكاملة من الخدمات، وتأخذ على عاتقها الاحترافية والابتكار في جميع مشاريعها من خلال مجموعة من المهندسين والفنيين المتخصصين والمصممين، إضافة للنظام الإداري المتابع لكافة تفاصيل المشروعات التي تم وسيتم تنفيذها، وخدمات الضمان على مدار العام. </h4>
                            <hr class="my-4" style="background: white;width: 400px">
                        </div>
                        
                    </div>
                    
                </div>
               
            </div>
           
        </div>
       
    </div>
</div>
@if ($offers !=null)
@include('frontend.offers') 
    @endif
   
    <!-- footer_start  -->
   @include('patiats._footer')

 