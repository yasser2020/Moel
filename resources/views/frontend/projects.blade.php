<div class="gallery_area" style="background: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-75">
                    <h3>انجازات المؤسسة</h3>
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
                            <img src="{{$project->getImage($item)}}" > 
                            </div>
                             @endforeach
            </div>
            
             @endforeach
         
         
@endif
@endif
</div>