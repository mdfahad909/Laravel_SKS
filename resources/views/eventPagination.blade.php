 @php
  $info = App\Models\Information::find(1);
@endphp

 <div class="container">
        <div class="row">

@foreach ($event as $event_data)
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog-single') }}" class="block-20" style="background-image: url({{ asset('assets/img/event/'.$event_data->image) }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">{{ $event_data->date }}</a></div>
                  {{-- <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mb-4"><a href="#">Bangladesh Event</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> {{ $event_data->created_at }}</span> <span><i class="icon-map-o"></i> {{ $event_data->address }}</span></p>
                <p>{{ $event_data->text }}</p>
              </div>
            </div>
          </div>  
@endforeach

          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
                {{ $event->links('pagination::default') }}
            </div>
          </div>
        </div>
      </div>