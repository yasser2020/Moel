<div class="gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-75">
                    <h4>تقدم مؤسسة موئل منظومة متكاملة من الخدمات، وتأخذ على عاتقها الاحترافية والابتكار في جميع مشاريعها من خلال مجموعة من المهندسين والفنيين المتخصصين والمصممين، إضافة للنظام الإداري المتابع لكافة تفاصيل المشروعات التي تم وسيتم تنفيذها، وخدمات الضمان على مدار العام. </h4>
                </div>
            </div>
        </div>
    </div>
        @if($projects!=null)
         @if($projects->count()>0)
               
             @foreach ($projects->get() as $project)
             <div class="container">
                            @foreach ($project->path as $item)
                            <div class="single_gallery">
                            <a class="popup-image" href="{{$project->getImage($item)}}" ></a>
                            <img src="{{$project->getImage($item)}}" style="width:255px;height: 378"> 
                            </div>
                             @endforeach
            </div>
            
             @endforeach
         
         
@endif
@endif
{{-- 
    @if ($project !=null)
    <div style="padding: 10px">
        @foreach ($project->path as $item)
        <div class="single_gallery">
        <a class="popup-image" href="{{$project->getImage($item)}}" ></a>
        <img src="{{$project->getImage($item)}}" style="width:255px;height: 378"> 
        </div>
         @endforeach
         @endif
    </div> --}}
   

    {{-- @if ($freelancer!=null)
    @foreach ($freelancer->privews_work as $item)
    <div class="single_gallery ">
        <a class="popup-image" href="{{$freelancer->getImage($item)}}"></a>
              <img src="{{$freelancer->getImage($item)}}" style="border:solid"> 
    </div>
          @endforeach
    @endif --}}
    {{-- <div class="single_gallery big_img">
        <a class="popup-image" href="img/gallery/1.png"></a>
        <img src="img/gallery/1.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="img/gallery/2.png"></a>
        <img src="img/gallery/2.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="img/gallery/3.png"></a>
        <img src="img/gallery/3.png" alt="">
    </div>

    <div class="single_gallery small_img">
        <a class="popup-image" href="img/gallery/4.png"></a>
        <img src="img/gallery/4.png" alt="">
    </div>
    <div class="single_gallery small_img">
        <a class="popup-image" href="img/gallery/5.png"></a>
        <img src="img/gallery/5.png" alt="">
    </div>
    <div class="single_gallery big_img">
        <a class="popup-image" href="img/gallery/6.png"></a>
        <img src="img/gallery/6.png" alt="">
    </div> --}}
</div>