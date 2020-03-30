
@include('patiats._head')   
@include('patiats._header')

    <!-- header-end -->
    
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                       
                        @auth
                        
                        @if (auth()->user()->hasRole('client'))
                        <a href="{{route('createClient')}}"  class="boxed-btn3 btn btn-primary mb-50" style="font-weight: bold;font-size: 15pt">خدمة العملاء</a>
                        @endif
                        @if (auth()->user()->hasRole('freelancer'))
                        <h3>الخدمات</h3>
                        @include('frontend.freelancer_services')
                         @endif
                        
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  
 
   
    <!-- footer_start  -->
   @include('patiats._footer')
