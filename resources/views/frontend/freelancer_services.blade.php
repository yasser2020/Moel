

<section class="content" style="direction: rtl">
    
    @if ($services->count() >0)
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover" >
              <thead>
              <tr>
                <th>#</th>
                <th>رقم الخدمة</th>
                <th>المدينة</th>
                <th>الموقع </th>
                <th>الوصف </th>
                <th>القبول</th>
                <th>خيارات</th>
              </tr>
              </thead>
              <tbody>
              
                @foreach ($services as $index=>$service)
                <tr>   
                <td>{{$index+1}}</td>
                <td>{{$service->service_num}}</td>
                <td>{{$service->city}}</td>
                <td>{{$service->location}}</td>
                <td>{{Str::limit($service->service_description,50)}}</td>
                <td>تم القبول</td>
                <td>
                @if (auth()->user()->hasPermission('update_freelancerServices'))
                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>
                 @else
                 <a href="" disabled="" class="btn btn-warning btn-sm"><i class="fa fa-edit"> تعديل</i></a>

                @endif
                    
                    <form action="" style="display:inline-block" method="post">
                   @csrf
                   @method('delete')
                   <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"> حذف</i></button>
                       
                   </form>
                 
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