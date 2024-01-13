@php
  $info = App\Models\Information::find(1);
@endphp
@include('header')

    <div class="hero-wrap" style="background-image: url({{ asset('assets/images/donation.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Members</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Members</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section bg-light" id="MemberSection">
      @include('memberPagination')
    </section>

    <section class="ftco-section-3 img" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url({{ asset('assets/images/bg_4.jpg') }});"></div>
    		</div>
        
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">একজন সদস্য হতে</h3>
    			<form action="{{ route('memberStore') }}" method="POST" class="volunter-form" enctype="multipart/form-data">
			      @csrf
            <div class="form-group">
              <input type="file" name="image" class="form-control">
            </div>
            
					<div class="form-group">
            <input type="text"  name="position" class="form-control" placeholder="আপনার পেশা লিখুন">
            </div>
            
					<div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="আপনার নাম লিখুন">
            </div>
            <div class="form-group">
              <input type="number" name="phone" class="form-control" placeholder="আপনার মোবাইল নাম্বার লিখুন">
            </div>
            <div class="form-group">
              <input type="text" name="district" class="form-control" placeholder="আপনার জেলার নাম লিখুন">
            </div>
            <div class="form-group">
              <input type="text" name="address" class="form-control" placeholder="আপনার ঠিকানা লিখুন">
            </div>
			<div class="form-group">
				<button class="btn btn-white py-3 px-5" type="submit">বার্তা পাঠান</button>
            </div>
          </form>
    		</div>      			
    		</div>
    	</div>
    </section>


     <script>
            $(document).ready(function(){

            $(document).on('click', '.pagination a', function(event){
              event.preventDefault(); 
              var page = $(this).attr('href').split('page=')[1];
              member_data(page);
            });

            function member_data(page)
            {
              $.ajax({
              url:"/member/member_fetch_data?page="+page,
              success:function(data)
              {
                $('#MemberSection').html(data);
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