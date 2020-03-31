<header>
    <div class="header-area " style="direction: rtl">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="col-md-4" style="margin-top: 10px;margin-right: 10px;" >
                                @auth
                        
                                <li class="nav-item dropdown" style="direction: rtl; width:200px">
                                    <p style="font-weight: bold;font-size: 12pt;color:white;margin-left: 120px">مرحبا بكم</p>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p style="font-weight: bold;font-size: 14pt;color: #17a2b8">  {{auth()->user()->name}}</p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if (auth()->user()->hasRole('super_admin')||auth()->user()->hasRole('administrator'))
                                    <a class="dropdown-item" href="{{route('dashboard.welcome')}}"> <i class="fa fa-tachometer"></i> لوحة التحكم </a>
                                      @endif
                                      <a  style="color: #17a2b8" class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i>
                                      خروج
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                  </li>

                                  @else
                                  <a href="{{route('login')}}" class="btn btn-warning mb-2 mb-md-0 mr-0 mr-md-2" style="font-weight: bold">تسجيل الدخول</a>
                                      
                                     
                                  @endauth

                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block" style="direction: rtl">
                                @include('patiats._nav')
                            </div>
                        </div>
                        @auth
                        {{-- <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="say_hello">
                                <a href="#">Book a Table</a>
                            </div>
                        </div> --}}
                        @endauth
                       
                       
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                              <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style=""><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                                        <li><a class="active" href="index.html" role="menuitem" tabindex="-1">home</a></li>
                                        <li><a href="Menu.html" role="menuitem" tabindex="-1">Menu</a></li>
                                        <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style=""><a href="#" tabindex="-1">pages <i class="ti-angle-down"></i></a>
                                            <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                <li><a href="about.html" role="menuitem" tabindex="-1">about</a></li>
                                                <li><a href="elements.html" role="menuitem" tabindex="-1">elements</a></li>
                                            </ul>
                                        </li>
                                        <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style=""><a href="#" tabindex="-1">blog <i class="ti-angle-down"></i></a>
                                            <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                <li><a href="blog.html" role="menuitem" tabindex="-1">blog</a></li>
                                                <li><a href="single-blog.html" role="menuitem" tabindex="-1">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
                                    </ul></div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>