 <!--Study description-->
 @if($offers!=null)
 @if($offers->count()>0)
 <section class="mt-50" id="stdyDesc">
        <div class="container">
          @foreach ($offers->get() as $offer)
            <div class="steps">
                <div class="title">
                <h5 class="title-heading">{{$offer->name}}</h5>
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </div>
                @if($offer->path!=null)
                     @foreach ($offer->path as $item)
                      <div class="mt-5">
                          <div class="row">
                              <div class="col-sm-6 col-md-3">
                                  <div class="item itemBlock">
                                    <div class="item-block">
                                      <a title="item name"><img src="{{$offer->getImage($item)}}"></a>
                                      <div class="description p-2">
                                        <div class="mb-2 item-link">
                                              <a >
                                              {{$offer->description}}
                                              </a>
                                          </div>
                                    
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @else
                      <h6 class="title-heading">{{$offer->description}}</h6>
                      @endif

            </div>
            @endforeach
        </div>
    </section>
    @endif
    @endif