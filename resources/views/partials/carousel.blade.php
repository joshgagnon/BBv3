<div id={{{$id}}} class="carousel carousel-fade slide" data-ride="carousel" data-interval="5000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li  data-target="#{{{$id}}}" data-slide-to="0" class="active"></li>
    @for ($i = 1; $i < count($images); $i++)
    <li  data-target="#{{{$id}}}" data-slide-to="{{ $i }}"></li>
    @endfor
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  @foreach($images as $image)
      <div class="item {{{ $image == $images[0] ?  'active' : '' }}}">
         @if($bg)
          <div class="bg-image" {{{ $image == $images[0] ?  'src' : 'lazy-load-src' }}}="{{ asset($image) }}"
            @if($image == $images[0])
              style="background-image: url({{ asset($image) }})"
            @endif
            alt="...">
            </div>
        @else
        <img class="bg-image" {{{ $image == $images[0] ?  'src' : 'lazy-load-src' }}}="{{ asset($image) }}"
            alt="..."/>


        @endif
        <div class="carousel-caption">
        </div>
      </div>

    @endforeach
   </div>
   @if(Session::has('controls') && Session::get('controls'))
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  @endif
</div> <!-- Carousel -->