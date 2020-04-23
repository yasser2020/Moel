<?php
use App\Settings;
   $setting=Settings::findOrFail(1);
?>
<nav >
    <ul id="navigation">
    <li><a href="{{route('index')}}" style="font-size: 15pt;font-weight: bold">الرئيسية</a></li>
    <li><a href="{{route('whoUs')}}" style="font-size: 15pt;font-weight: bold">من نحن</a></li>
        <li><a href="{{route('projects')}}" style="font-size: 15pt;font-weight: bold"> المشاريع</a></li>
        <li><a href="#" style="font-size: 15pt;font-weight: bold">اتصل بنا <i class="ti-angle-down"></i></a>
            <ul class="submenu fff" style="background:white;color:black;width:300px;font-size: 12pt">
            <li>{{$setting->phone_num}}  <i class="fa fa-plus" style="font-size: 12pt"></i></li>
                <li>{{$setting->whats_num}} <i class="fa fa-phone"  style="font-size: 12pt"></i> </li>
              <li>{{$setting->email}}  <i class="fa fa-google"  style="font-size: 12pt"></i> </li>
            </ul>
        </li>
    {{-- <li><a href="{{route('login')}}" style="font-size: 15pt;font-weight: bold">تسجيل الدخول</a></li> --}}


    </ul>
    
   
</nav>