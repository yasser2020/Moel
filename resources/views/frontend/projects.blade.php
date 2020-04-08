@include('patiats._head')   
@include('patiats._header')
<div class="gallery_area bg" >
    <div class="container">
        
         <h3 class="text-center" style="font-weight: bold;color: white">تقدم مؤسسة موئل منظومة متكاملة من الخدمات، وتأخذ على عاتقها الاحترافية والابتكار في جميع مشاريعها من خلال مجموعة من المهندسين والفنيين المتخصصين والمصممين، إضافة للنظام الإداري المتابع لكافة تفاصيل المشروعات التي تم وسيتم تنفيذها، وخدمات الضمان على مدار العام</h3>
         <hr style="font-weight: bold">
    </div>
        @if($projects!=null)
         @if($projects->count()>0)
               
             @foreach ($projects->get() as $project)
             <div class="container">
                            @foreach ($project->path as $item)
                            <div class="single_gallery">
                            <a class="popup-image" href="{{$project->getImage($item)}}" ></a>
                            <img src="{{$project->getImage($item)}}" > 
                            </div>
                             @endforeach
            </div>
            
             @endforeach
         
         
@endif
@endif
</div>

@include('patiats._footer')