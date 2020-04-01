
    <!-- jQuery -->
    <script src="{{asset('dashboard_files/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dashboard_files/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Morris.js charts -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> --}}
    <script src="{{asset('dashboard_files/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('dashboard_files/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('dashboard_files/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('dashboard_files/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('dashboard_files/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script> --}}
    <script src="{{asset('dashboard_files/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('dashboard_files/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('dashboard_files/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('dashboard_files/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    {{-- <script src="{{asset('dashboard_files/plugins/fastclick/fastclick.js')}}"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard_files/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{asset('dashboard_files/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{asset('dashboard_files/js/demo.js')}}"></script> --}}
    
    <script>
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
      });
    $(document).ready(function(){
     $(document).on('click','.delete',function(e){
       e.preventDefault();
       var that=$(this);
          var n=new Noty({
        text:"سيم حذف المشروع",
        killer:true,
        buttons:[
          Noty.button('نعم','btn btn-danger ml-100',function(){
           that.closest('form').submit();
          }),
          Noty.button('لا','btn btn-success',function(){
                n.close();
         }),
  
        ],
          });
          n.show();
     });

     //delele client
     $(document).on('click','.delete_client',function(e){
       e.preventDefault();
       var that=$(this);
          var n=new Noty({
        text:"سيم حذف العميل",
        killer:true,
        buttons:[
          Noty.button('نعم','btn btn-danger ml-100',function(){
           that.closest('form').submit();
          }),
          Noty.button('لا','btn btn-success',function(){
                n.close();
         }),
  
        ],
          });
          n.show();
     });

  //delele freelancer
  $(document).on('click','.delete_freelancer',function(e){
       e.preventDefault();
       var that=$(this);
          var n=new Noty({
        text:"سيم حذف العضو",
        killer:true,
        buttons:[
          Noty.button('نعم','btn btn-danger ml-100',function(){
           that.closest('form').submit();
          }),
          Noty.button('لا','btn btn-success',function(){
                n.close();
         }),
  
        ],
          });
          n.show();
     });


      //delele service
  $(document).on('click','.delete_service',function(e){
       e.preventDefault();
       var that=$(this);
          var n=new Noty({
        text:"سيم حذف الخدمة",
        killer:true,
        buttons:[
          Noty.button('نعم','btn btn-danger ml-100',function(){
           that.closest('form').submit();
          }),
          Noty.button('لا','btn btn-success',function(){
                n.close();
         }),
  
        ],
          });
          n.show();
     });

  
    });
    </script>