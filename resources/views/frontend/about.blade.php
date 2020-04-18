
@include('patiats._head')
<body>
   
@include('patiats._header')
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area bg">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                            <h3 class="shadow demotext">{{$setting->logo}}</h3>
                                <hr class="my-4" style="background: white;width: 400px">
                            <p>{{$setting->about_into}}</p>
                                <a href="{{URL::previous()}}" class=" myButton">الرجوع</a>
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
        </div>
    </div>
    @include('patiats._footer')