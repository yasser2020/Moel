<div class="gallery_area" style="background: whitesmoke">
    <div class="container">
        <div class="row">
            {{-- <div class="col-xl-12">
                <div class="section_title text-center mb-75" style="background:yellow">
                    <h4 style="font-weight: bold;">تقدم مؤسسة موئل منظومة متكاملة من الخدمات، وتأخذ على عاتقها الاحترافية والابتكار في جميع مشاريعها من خلال مجموعة من المهندسين والفنيين المتخصصين والمصممين، إضافة للنظام الإداري المتابع لكافة تفاصيل المشروعات التي تم وسيتم تنفيذها، وخدمات الضمان على مدار العام. </h4>
                </div>
            </div> --}}
        </div>
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