@extends('frontend.welcome')
@section('aboutus')
  <!-- Services-->
  <section class="services" id="services">
    <div class="container">
        <div class="services-cont mt-4 ">
            <div class="title">
                <h5 class="title-heading">الخصوصية</h5>
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
               
            </div>
             <p class="mt-5">{{$setting->privacy_into}}</p>
         
        </div>
    
    </div> 
</section>

@endsection
   

