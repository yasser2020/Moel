<!--Footer-->
<?php
use App\Settings;
use App\SocialNetwork;
   $setting=Settings::findOrFail(1);
   $socail_networks=SocialNetwork::get();
   
?>
<footer class="mt-5" id="contact">
    <div class="container">
        <div class="row footer-cols">
            <div class="col-md-4 col-sm-6 col-cont">
                <a>
                    <h5>من نحن</h5>
                <p>{{$setting->about_into}}</p>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 col-cont">
                <h5>وسائل التواصل</h5>
                <ul class="initial">
                    <li>رقم الواتساب :
                    <span>{{$setting->whats_num}}</span>
                    </li>
                    <li>تليفون
                    <span>{{$setting->phone_num}}</span>
                    </li>
                    <li>
                    ايميل : 
                    <span>{{$setting->email}}</span> 
                    </li>
                    @if ($socail_networks!=null)
                    <li>
                    @foreach ($socail_networks as $social_network)
                    <a href="{{$social_network->link}}" title="faceitem"><i class="fa fa-{{$social_network->site}}"></i></a>
                    @endforeach
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-cont">
                <a>
                <h5>{{$setting->logo}}</h5>
                    <img src="{{asset('assets/images/logo.jpg')}}">
                </a>
            </div>
        </div>
    </div>
</footer>

</div><!-- wrap-content -->


</div>

<!--Js-->
<script src="{{asset('assets/roots/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/roots/js/bootstrap.min.js')}}"></script>

<!-- owl carousel -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {

'use strict';
var $overviewSlide = $('.owl-carousel')
if ($overviewSlide.length > 0) {
$overviewSlide.owlCarousel({
loop: true,
center: true,
margin: 0,
items: 1,
nav: false,
dots: true,
dotsContainer: '.dots'
})
$('.owl-dot').on('click', function () {
$(this).addClass('active').siblings().removeClass('active');
$overviewSlide.trigger('to.owl.carousel', [$(this).index(), 300000]);
});
}


});    
</script>    
<!-- functions-->
<script src="assets/js/functions.js"></script>
<script>
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
    });

    @stack('script');


</script>
</body>
</html>
