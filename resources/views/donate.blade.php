@php
  $info = App\Models\Information::find(1);
@endphp

@include('header')

    <div class="hero-wrap" style="background-image: url({{ asset('assets/images/donation.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Donation</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donation</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light" id="DonateSection"> 
        @include('donatePagination')
    </section>


      @include('footer')



      <script>
            $(document).ready(function(){

            $(document).on('click', '.pagination a', function(event){
              event.preventDefault(); 
              var page = $(this).attr('href').split('page=')[1];
              fetch_data(page);
            });

            function fetch_data(page)
            {
              $.ajax({
              url:"/donate/fetch_data?page="+page,
              success:function(data)
              {
                $('#DonateSection').html(data);
              }
              });
            }
            
            });
</script>
    
  </body>
</html>