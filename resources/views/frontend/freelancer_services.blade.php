<style>
  .color{
    color: red;
  }
</style>

<section class="content" style="direction: rtl">
    @if ($services->count() >0)
    <div class="row">
     
        <div class="card container-fluid">
          <!-- /.card-header -->
          <div class="col-md-12">
          <div class="card-body justify-content-center">
            <table id="example2" class="table table-bordered table-hover" >
              <thead>
              <tr>
                <th>#</th>
                <th>رقم الخدمة</th>
                <th>المدينة</th>
                <th>الموقع </th>
                <th>وصف الخدمة </th>
                <th> القبول</th>
                <th>الانضمام لفريق</th>
                
              </tr>
              </thead>
              <tbody>
              
                @foreach ($services as $index=>$service)
                <tr style="font-weight: bold">   
                <td>{{$index+1}}</td>
                <td>{{$service->service_num}}</td>
                <td>{{$service->city}}</td>
                <td>{{$service->location}}</td>
                @if ($service->accept==1)
                <td id='color' style="color:red">{{$service->service_description}}</td>
                @else
                <td id='color' style="color:green">{{$service->service_description}}</td>
                @endif
                <td>
                
                  @if ($service->accept==0 && ($service->work_anlone==0 && $service->accept_team==0))
               
                <i id="only-{{$service->id}}" class="only" data-service-id="{{$service->id}}">
                  <button  class="btn btn-primary btn-sm ">العمل وحدى</button>
                </i>
                <i id="with-{{$service->id}}" class="with" data-service-id="{{$service->id}}">
                  <button  class="btn btn-primary btn-sm ">قبول الفريق</button>
                </i>
                  @else

                  <i class="only" data-service-id="{{$service->id}}">
                    <button disabled class="btn btn-primary btn-sm ">العمل وحدى</button>
                  </i>
                  <i class="with" data-service-id="{{$service->id}}">
                    <button disabled class="btn btn-primary btn-sm ">قبول الفريق</button>
                  </i>
                  @endif 
               
                </td>
                <td>
                  @if ($service->accept_team!=0)
                  @if ($service->team_memeber!=null)
                  <button data-service-id="{{$service->id}}" {{count($service->team_memeber)==3?'disabled':''}}  class="btn btn-warning btn-sm join">انضام لفريق عمل</button>                
                  @else
                  <button data-service-id="{{$service->id}}"  class="btn btn-warning btn-sm join">انضام لفريق عمل</button>                
                  @endif
                  {{-- <button onclick="none" class="btn btn-primary btn-sm">2</button> --}}
                  @if ($service->team_memeber!=null)
                  <p id="counter-{{$service->id}}"  class="btn btn-info btn-sm" style="font-size: 8pt">{{count($service->team_memeber)}}</p>
                  @else
                  <p id="counter-{{$service->id}}"  class="btn btn-info btn-sm" style="font-size: 8pt">0</p>

                  @endif
                  @else
                  <button disabled class="btn btn-warning btn-sm" type="submit">انضام لفريق عمل</button>
                  @endif
                  
                </td>
                  </tr>
                    @endforeach
              </tfoot>
            </table>
            {{-- {{$services->appends(request()->query())->links()}} --}}
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    @else 
    <h3 style="font-weight:400">عفوا لايوجد بيانات</h3>
    @endif
  </section>
  @push('script')

    $(document).ready(function(){
      
      $(document).on('click','.only',function(e){
         let serviceId=$(this).data('service-id');
      var s='{{url('accept/'.\Request::segment(5))}}';
      var url=s+'/'+serviceId+'/'+'only';
        $('#with-'+serviceId).remove();
        $.ajax({
          url:url,
          method:'put',
          success:function(){
             $('#color').css('color','red');
             location.reload();
             alert('سنقوم بالتواصل معك شخصيا خلال 12 ساعة');
          }, 
       }); 

      });

      $(document).on('click','.with',function(e){
        
        let serviceId=$(this).data('service-id');
        var s='{{url('accept/'.\Request::segment(5))}}';
        var url=s+'/'+serviceId+'/'+'with';
        $('#only-'+serviceId).remove();
          $.ajax({
            url:url,
            method:'put',
            success:function(){
               $('#color').css('color','red');
               location.reload();
               alert('سنقوم بالتواصل معك شخصيا خلال 12 ساعة');
         
            }, 
         }); 

      });
   
      $(document).on('click','.join',function(e){
        
        let serviceId=$(this).data('service-id');
         let count=$('#counter-'+serviceId).html();
        var s='{{url('jointoTeam/'.\Request::segment(5))}}';
        var url=s+'/'+serviceId;
        
       
          $.ajax({
            url:url,
            method:'get',
            success:function(){
               location.reload();
               alert('سنقوم بالتواصل معك شخصيا خلال 12 ساعة');
         
            }, 
         }); 


      });














    });
@endpush
 

  


 