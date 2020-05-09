<!DOCTYPE html>
<html>
@include('layouts.dashboard._header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      @include('layouts.dashboard._navbar')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      @include('layouts.dashboard._aside')
     {{-- Content --}}
     <main class="app-content">
      @include('dashboard.partials._session')
      @yield('content')
   
     </main>
      

      {{-- <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar --> --}}
    </div>
    <!-- ./wrapper -->
    @include('layouts.dashboard._footer2');
    </body>
    </html>
    