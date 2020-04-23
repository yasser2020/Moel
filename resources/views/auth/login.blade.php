@include('patiats._head')   
@include('patiats._header')

<div class="Reservation_area bg">
   
    <div class="container p-0" style="direction: rtl">
        
        <div class="row no-gutters justify-content-center">
           
            <div class="col-lg-6">
                <div class="book_Form" style="background-image: linear-gradient(#b2967d,#6b2b06);">
                    <h3 class="text-center">تسجيل دخول</h3>
                    
                    <div class="row ">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input_field mb_15">
                                    <input type="text" name="email" required placeholder="الايميل او رقم الهوية" style="font-weight: bold">
                                </div>
                                <div class="input_field mb_15">
                                    <input type="password" name="password" required placeholder="الباسورد" style="font-weight: bold">
        
                                </div>
                                <div class="input_field mb_15 d-flex">
                                    <label for="" class="mt-10" style="font-weight: bold;color: wheat;margin-left: 10px">تذكرنى</label>

                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width:20px;" >
                                </div>
                                <div class="input_field mb_15 text-center">
                                <button type="submit" class="boxed-btn3 myButton" style="font-weight: bold;">الدخول</button>        
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
{{-- @include('patiats._footer') --}}