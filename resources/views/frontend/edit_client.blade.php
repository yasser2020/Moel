@include('patiats._head')   
@section('background','bg')
@include('patiats._nav')  
 <!--Hero intro-->
 <div id="wrap-inner" >
  <div class="container">
     <div class="mt-4 text-center">
         <div class="title">
               <h5 class="title-heading">تعديل بيانات التسجيل</h5>
               <span class="heading-style">
                   <i></i>
                   <i></i>
                   <i></i>
               </span>
              
           </div>
     </div>
     <div class="row">
      <div class="col-md-2"></div>   
     <div class="col-md-8">
       <div class="form-content ">
        @include('dashboard.partials._errors')
        <form method="POST" action="{{route('updateClient',[auth()->user()->email,$type])}}">
            @csrf
               <div class="form-tab">

                   <div class="tab-content">
                       <div class="tab-pane   active show" id="tab_a">
                           <div>
                           
                              @if($type=='profile')
                            <div class="styled-input">
                              <input type="text"  name="name"  value="{{$client->name}}" required >
                              <label>الأسم الرباعي</label>
                          </div>      
                          <div class="styled-input">
                              <input type="text"  name="nationality" value="{{$client->nationality}}" required >
                              <label>الجنسية</label>
                          </div>
                          <div class="styled-input">
                              <input type="text"  name="city"  value="{{$client->city}}"  required>
                              <label>المدينة</label>
                          </div>
                          <div class="styled-input">
                            <input type="text"  name="address"  value="{{$client->address}}" required>
                            <label>العنوان</label>
                        </div>
                          <div class="styled-input">
                              <input type="text"  name="phone_num"  value="{{$client->phone_num}}" required  >
                              <label>رقم الجوال</label>
                          </div>

                          <div class="styled-input">
                              <input type="text"  name="whats_num" value="{{$client->whats_num}}" required >
                              <label>رقم الواتس</label>
                          </div>

                          <div class="styled-input">
                              <input type="email"  name="email"  value="{{$client->email}}" required  >
                              <label>الايميل</label>
                          </div>
                          @endif
                          @if($type=='pass')

                          <div style="display: inline-flex">
                            <div class="styled-input">
                                <input type="password" id="password"  name="password" required >
                                <label>كلمة السر الحالية</label>
                            </div>
                            <div class="checkbox my-5">
                              <input type="checkbox"  id="checkbox">
                          </div> 
                          </div>
                    

                          <div style="display: inline-flex">
                          <div class="styled-input">
                            <input type="password" id="new_password"   name="new_password"   required >
                            <label>كلمة السر الجديدة</label>
                        </div>
                        <div class="checkbox my-5">
                            <input type="checkbox"   id="checkbox2">
                        </div> 
                          </div>
                          @endif
                          </div>    
                               <div class="mt-3">
                                   <button type="submit" class="btn btn-default">
                                     حفظ
                                   </button>
                               </div>
                           </div>
                          
                       </div>

                   </div>
               </div>
           </form>
       </div>
     </div>
     </div>
 </div>
</div>
 @push('script')
 $(document).ready(function(){

     $('#checkbox').on('change',function(){
         $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password");
     });

     $('#checkbox2').on('change',function(){
        $('#new_password').attr('type',$('#checkbox2').prop('checked')==true?"text":"password");
    });
   
 });
@endpush
@include('patiats._footer')  