@include('patiats._head')   
@include('patiats._header')
<div class="container" style="background-color: black">
    
        @if($offers!=null)
         @if($offers->count()>0)
             @foreach ($offers->get() as $offer)
             <div class="container">
             <h3 class="text-center" style="font-weight: bold;color: white">{{$offer->description}}</h3>
                     <hr style="font-weight: bold">
                     @if($offer->path!=null)
                            @foreach ($offer->path as $item)
                            <div class="single_gallery">
                            <a class="popup-image" href="{{$offer->getImage($item)}}" ></a>
                            <img src="{{$offer->getImage($item)}}" > 
                            </div>
                             @endforeach
                             @endif
            </div>
             @endforeach
@endif
@endif
</div>

