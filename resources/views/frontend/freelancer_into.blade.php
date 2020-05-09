<?php
use App\FreelancerAdavantages; 
$freelancerAdvantages=FreelancerAdavantages::get();
?>
@include('patiats._head') 
@section('background','bg')
@include('patiats._nav')  
  <!--Hero intro-->
  <div id="wrap-inner" >
    <div class="container">
        <p>
                    
            المعنيين :
            (استشاريين – مهندسين – فنيين – منفذين – مصممين - حرفيين – عمالة حرة – شركات – مؤسسات – موهوبين) 
            في كافة المجالات (معماري – انشائي – ديكور – تنسيق - جرافيك - تخطيط – حدائق – زراعة - كهرباء – ميكانيكا – مرافق)                                       
                      
        </p>
      @if ($freelancerAdvantages !=null)
      @if($freelancerAdvantages->count()>0)
       <div class="row">
         <div class="col-lg-1"></div>   
         <div class="col-lg-10">
           <div class="mt-4 text-center">
             <div class="title">
                   <h5 class="title-heading">المميزات</h5>
                   <span class="heading-style">
                       <i></i>
                       <i></i>
                       <i></i>
                   </span>
                  
               </div>
         </div>
         
           <div class="mt-5">
             <ul class="steps-list">
                 @foreach ($freelancerAdvantages as $freelancerAdvantage)
                 <li>
                     <i class="fa fa-check">
                     </i>
                     {{$freelancerAdvantage->name}} </li>
                 @endforeach  
             </ul>
           </div>
         </div>
       </div>
       @endif
       @endif
       <div class="row">
         <div class="col-lg-1"></div>   
         <div class="col-lg-10 mt-5">
           <div class="services-cont mt-4 ">
           <div class="title">
               <h5 class="title-heading">الشروط</h5>
               <span class="heading-style">
                   <i></i>
                   <i></i>
                   <i></i>
               </span>
              
           </div>
            
                 <textarea readonly  rows="3" class="form-control mt-5" style="font-weight: bold;font-size: 13pt;text-align: right;overflow-y: scroll;border: 1px solid #ddd;margin-bottom: 10px">{{$setting->termsandconditions_freelancers}}</textarea>

                   
           </div>
         </div>

       </div>
       <div class="row">
         <div class="col-lg-1"></div>
         <div class="col-lg-10">
         <div class="checkbox mt-2 mb-4">
           <label>أوافق</label>
           <input type="checkbox" id="agree" value="agree" name="check">
               
           </div> 
           <div class="d-flex justify-content-center">
            <form action="{{route('createFreelancer')}}" method="get">
              <button type="submit"  disabled class="btn btn-default  go myButton" style="margin-right: 10px">للتقديم</button>
          </form>
                <a href="{{URL::previous()}}" class="btn btn-secondary mr-2">الرجوع</a>
               
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
         $('.go').prop("disabled",true);
           
       }
     });
   
 });
@endpush
 @include('patiats._footer')  