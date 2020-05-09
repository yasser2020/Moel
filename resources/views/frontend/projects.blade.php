@include('patiats._head')  
@section('background','bg')
@include('patiats._nav')  
 <!-- Statics-->
 <div><h1>المشاريع</h1></div>
 <section id="projects" class="mt-200 pt-5 pb-5">
    <div class="container">
        <div class="title">
                <h5 class="title-heading">المشاريع</h5>
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
        </div>
        <div class="row">
        <div class="col-lg-2"></div>
        <p class="mt-5 text-center col-lg-8">{{$setting->projects_into}}</p>
        </div>
        <div class="statics mt-5">
            @if($projects!=null)
            @if($projects->count()>0)
            @foreach ($projects as $project)
            <div class="row">
                @foreach ($project->path as $item)
                <div class="col-sm-6 col-md-3">
                     <div class="card project">
                       <div class="imgBx">
                          <img src="{{$project->getImage($item)}}" class="popup-image" alt="images">
                       </div>
                       {{-- <div class="details">
                          <div class="name "><a href="project.rtl.html">Easy to find product</a></div>
                        </div> --}}
                      </div>
                </div>
                @endforeach
            </div>
            @endforeach

            {{$projects->appends(request()->query())->links()}}
            @endif
            @endif

        </div>
    </div>
</section>
@include('patiats._footer')