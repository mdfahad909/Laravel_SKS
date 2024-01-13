@php
  $info = App\Models\Information::find(1);
@endphp
@include('header')

            <marquee>{{ $info?$info->notic:'' }}</marquee>

    <div class="owl-carousel owl-theme">
			@foreach ($slider as $slider_item)
		        <div class="slide" style="background-image: url({{ asset('assets/img/slider/'. $slider_item->image) }});">
				<div class="slide-content">
					<h1 class="text-white">{{ $slider_item->heading }}</h1>
					{{-- <p>{{ $slider_item->text }}</p> --}}
				</div>
        	</div>
          @endforeach
    </div>



    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Peoples</span>
                <strong class="number" data-number="{{ $info->people??'0' }}">0</strong>
                <span>Poor in Bangaldesh</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate Money</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="{{ route('contact') }}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Member</h3>
              	<p>Even the all-powerful Pointing has no control about the blind texts.</p>
              	<p><a href="{{ route('member') }}" class="btn btn-white px-3 py-2 mt-2">Be A Member</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">দান করুন</h3>
                <p> অন্যকে সাহায্য করুন তার স্বপ্ন ছুতে, দেখবেন আপনি আপনার স্বপ্ন এর কত কাছে চলে গেছেন।</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">স্বেচ্ছাসেবক হয়ে উঠুন</h3>
                <p>স্বেচ্ছাসেবীরা সবসময় মানুষের ভালো করার চেষ্টা করে। স্বেচ্ছাসেবক হয়ে আপনি আপনার জীবনে ভালো কিছু কাজ করতে পারেন। এই কাজটি আপনার মনকে সম্প্রদায়ের সাথে সংযুক্ত রাখে এবং নতুন কিছু কাজের দক্ষতা অর্জন করতে সাহায্য করে। </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">স্পনসরশিপ</h3>
                <p>আমি এমন কিছু করতে পারি যা আপনি পারেন না, আবার আপনিও এমন অনেক কিছু করতে পারেন যা আমি কখনো করতে পারব না। তবে একসাথে মিলে আমরা চাইলে অসাধারণ কিছু করে ফেলতে পারি।</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">আমাদের লক্ষ্য</h2>
            <p>স্বজন কল্যাণ সংঘের সকল সদস্যের একমাত্র লক্ষ তাদের পরিবার বর্গের ও সম্ভাব্য সকল সমর্থকদের পারস্পরিক স্বমর্মিতা ও সহযোগিতার মাধ্যেমে সকলের সুশিক্ষা, আর্থিক উন্নয়ন, নৈতিক, সামাজিক, স্বাস্থ্যগত, ধর্র্মগত, সুষ্ট পরিবেশ সৃষ্টির মাধ্যেমে সর্বাঙ্গিন কল্যাণ সাধন।</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
              @foreach ($goal as $goal_data)
  	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url({{ asset('assets/img/goal/'.$goal_data->img.'') }});"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">{{ $goal_data->heading }}</a></h3>
		    						<p>{{ $goal_data->text }}</p>
		    						<span class="donation-time mb-3 d-block">{{ date('d-M-Y', strtotime($goal_data->created_at)); }}</span>
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		    					</div>
		    				</div>
	    				</div>
            @endforeach
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">OUR LATEST DONATION</h2>
            <p>কখনোই সংখ্যা নিয়ে দুশ্চিন্তা করবেন না। প্রতিবার একজন মানুষকে সাহায্য করুন এবং সবসময় পাশের মানুষটা দিয়েই শুরু করুন।.</p>
          </div>
        </div>
        <div class="row">
          @foreach ($donate as $donate_item )
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url({{ asset('assets/img/donation/'. $donate_item->image) }});"></div>
        				<div class="info ml-4">
        					<h3><a href="">{{ $donate_item->name }}</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>৳{{ $donate_item->amount }}</span> for <b href="#">Sajon Kolyan Songo</b></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>				
			  @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
			<div class="row">
				@foreach ($gallery as $gallery_data)
				<div class="col-md-3">
				<a  href="{{ asset('assets/img/gallery/'.$gallery_data->image.'') }}" class="gallery g_img image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/img/gallery/'.$gallery_data->image.'') }});">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
		    </div>
			@endforeach
			</div>
    </section>

    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog-single') }}" class="block-20" style="background-image: url({{ asset('assets/images/image_1.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog-single') }}" class="block-20" style="background-image: url({{ asset('assets/images/image_2.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog-single') }}" class="block-20" style="background-image: url({{ asset('assets/images/image_3.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
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
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Member</h2>
          </div>
        </div>
        <div class="row">

            

    			@foreach ($member as $member_item )
                    @if ($member_item->status==1)
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url({{ asset('assets/img/member/'. $member_item->image) }});"></div>
        				<div class="info ml-4">
        					<h3><a href="">{{ $member_item->name }}</a></h3>
        					<span class="position">{{ $member_item->position }}</span>
        					<div class="text">
		        				<p>District <span>{{ $member_item->district }}</span> for <b href="#">{{ $member_item->address }}</b></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>		
                    @endif		
			  @endforeach
        </div>
      </div>
    </section>


		{{-- <section id="member" class="ftco-section-3 img" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url({{ asset('assets/images/bg_4.jpg') }});"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">একজন সদস্য হতে</h3>
    			<form action="{{ route('member.store') }}" method="POST" class="volunter-form">
			      @csrf
					<div class="form-group">
              <input type="file" name="img" class="form-control">
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
    </section> --}}


    {{-- Footer --}}
      @include('footer')
    {{-- Footer --}}
    
  
  </body>
</html>