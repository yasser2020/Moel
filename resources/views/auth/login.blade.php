@include('patiats._head') 
@section('background','bg')
@include('patiats._nav')  
 <!--Hero intro-->
 <div id="wrap-inner" >
    <div class="container">
       <div class="mt-4 text-center">
           <div class="title">
                 <h5 class="title-heading">تسجيل الدخول</h5>
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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                 <div class="form-tab">

                     <div class="tab-content">
                         <div class="tab-pane   active show" id="tab_a">
                             <div>
                                 
                                 <div class="styled-input">
                                     <input type="text"  name="email" required >
                                     <label>الايميل او رقم الهويه</label>
                                 </div>      
                                
                                 <div class="styled-input">
                                     <input type="password"  name="password" required>
                                     <label>الرقم السري</label>
                                 </div> 

                                 <div class="checkbox mt-5 mb-4">
                                     <input type="checkbox"  name="check">
                                     <label>تذكرني</label>
                                 </div> 
                                 <div class="mt-3">
                                     <button type="submit" class="btn btn-default">
                                       تسجيل دخول
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
@include('patiats._footer')  
