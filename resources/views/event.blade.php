@php
  $info = App\Models\Information::find(1);
@endphp

@include('header')

    <div class="hero-wrap" style="background-image: url({{ asset('assets/images/event.jpeg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Event</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Event</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section" id="EventSection">
      @include('eventPagination')
    </section>
		


      <script>
            $(document).ready(function(){
            $(document).on('click', '.pagination a', function(event){
              event.preventDefault(); 
              var page = $(this).attr('href').split('page=')[1];
              event_fetch_data(page);
            });

            function event_fetch_data(page)
            {
              $.ajax({
              url:"/event/event_fetch_data?page="+page,
              success:function(data)
              {
                $('#EventSection').html(data);
              }
              });
            }
            });
</script>

    {{-- Footer --}}
      @include('footer')
    {{-- Footer --}}
    
  </body>
</html>