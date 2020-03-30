
@include('patiats._head')   
@include('patiats._header')
    <!-- header-end -->
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>تم تسجيل بيانتك بنجاح</h3>
                            {{-- @if ($type=="client")
                            <p style="background:red;color: white" class="text-center">نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك من خلال البريد الالكتروني المسجل .</p>
                            @endif
                            @if ($type=="freelancer")
                            <p style="background:red;color: white" class="text-center">نرجو ارفاق صورة السداد وارسالها على الايميل المسجل وسيتم تفعيل اشتراكك خلال 24 ساعة من تاريخ الارسال واعلامكم بذلك خلال البريد الالكتروني المسجل حيث يمكنكم الدخول بعدها لمشاهدة العروض عن طريق الدخول للموقع من خلال اليوزرنيم والباسورد( البريد الالكتروني   – ورقم الجوال ).</p>
                            @endif --}}
                            
                                <a href="{{route('index')}}" class="boxed-btn3">الرجوع</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="menu.html" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="menu.html" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
