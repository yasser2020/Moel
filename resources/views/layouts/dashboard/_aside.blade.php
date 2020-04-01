<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<a href="{{route('dashboard.welcome')}}" class="brand-link">
      <img src="{{asset('dashboard_files/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size:8pt">مؤسسة موئل للتصميم والتنسيق والعمارة</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="{{asset('dashboard_files/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              
                  <li class="nav-item">
                  <a href="{{route('dashboard.welcome')}}" class="nav-link">
                      <i class="nav-icon fa fa-th"></i>
                      <p> لوحة التحكم </p>
                    </a>
                  </li>
       
             @if (auth()->user()->hasPermission('read_projects'))
                  <li class="nav-item">
                      <a href="{{route('dashboard.projects.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>المشاريع</p>
                      </a>
                  </li>
              @endif
              @if (auth()->user()->hasPermission('read_clients'))
              <li class="nav-item">
               <a href="{{route('dashboard.clients.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>العملاء الجدد</p>
                  </a>
              </li>
          @endif
          @if (auth()->user()->hasPermission('read_freelancers'))
          <li class="nav-item">
           <a href="{{route('dashboard.freelancers.index')}}" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Freelancers الجدد</p>
              </a>
          </li>
      @endif
     
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-pie-chart"></i>
          <p>
          الخدمات
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          @if (auth()->user()->hasPermission('read_clientServices'))
          <li class="nav-item">
          <a href="{{route('dashboard.clientServices.index')}}" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p> الخدمات الواردة</p>
            </a>
          </li>
          @endif
          @if (auth()->user()->hasPermission('create_freelancerServices'))
          <li class="nav-item">
          <a href="{{route('dashboard.services.create')}}" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>ادخال الخدمات</p>
            </a>
          </li>
          @endif
          @if (auth()->user()->hasPermission('read_freelancerServices'))
          <li class="nav-item">
          <a href="{{route('dashboard.services.index')}}" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>عرض الخدمات</p>
            </a>
          </li>
          @endif
          
        </ul>
      </li>


        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
              الارشيف
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (auth()->user()->hasPermission('read_clients'))
              <li class="nav-item">
                <a href="{{route('dashboard.currentClients')}}" class="nav-link">
                  <i class="fa fa-users"></i>
                  <p>العملاء</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->hasPermission('read_freelancers'))
              <li class="nav-item">
              <a href="{{route('dashboard.currentFreelancers')}}" class="nav-link">
                  <i class="fa fa-users"></i>
                  <p>الاعضاء</p>
                </a>
              </li>
              @endif

              @if (auth()->user()->hasPermission('read_freelancerServices'))
              <li class="nav-item">
              <a href="{{route('dashboard.arachiveService')}}" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>الخدمات</p>
                  </a>
              </li>
          @endif
              
            </ul>
          </li>

         

            {{-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                المشاريع
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار ChartJS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Flot</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Inline</p>
                  </a>
                </li>
              </ul>
            </li> --}}
            
           
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>