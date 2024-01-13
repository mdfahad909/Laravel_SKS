@php
  $info = App\Models\Information::find(1);
@endphp

@include('header')


    <div class="hero-wrap" style="background-image: url({{ asset('assets/images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>About</span></p>
            <h1 class=" mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url({{ asset('assets/images/bg_3.jpg') }}); width: 100%;"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4 ">১৯৭৮ সাল থেকে প্রতিষ্ঠিত স্বজন কল্যাণ সংঘটনে স্বাগতম</h2>
    				<p>স্বজন কল্যাণ সংঘের সকল সদস্যের একমাত্র লক্ষ তাদের পরিবার বর্গের ও সম্ভাব্য সকল সমর্থকদের পারস্পরিক স্বমর্মিতা ও সহযোগিতার মাধ্যেমে সকলের সুশিক্ষা, আর্থিক উন্নয়ন, নৈতিক, সামাজিক, স্বাস্থ্যগত, ধর্মগত, সুষ্ট পরিবেশ সৃষ্টির মাধ্যেমে সর্বাঙ্গিন কল্যাণ সাধন।</p>

    				<p>স্বজন কল্যাণ সংঘের দুটি তহবিল ও যাকাত তহবিল। স্বজন কল্যাণ সংঘের কল্যাণ তহবিল গঠনের মাধ্যমে স্বজনদের আওতাভূক্ত মেধাবী ও দরিদ্র ছাত্র-ছাত্রীদের বৃত্তি প্রদানের একটি স্থায়ী প্রকল্প গ্রহন করা হইয়াছে। বিগত বৎসর গুলিতে বহু সংখ্যক ছাত্রকে বৃত্তি প্রধানের ব্যবস্থা করা হইয়াছে। বিগত বৎসর গুলিতে কিছু সংখ্যক ছাত্রকে বৃত্তি প্রদানের ব্যবস্থা করা হইয়াছে। তহবিল সংগ্রহ করিতে পারিলে ভবিৎষ্যতে আর ও ব্যাপক ব্যবস্থা গ্রহন করা হইবে। দুঃস্থ মানবতার সেবায় এগিয়ে যাওয়ার লক্ষ্যে স্বজন কল্যাণ সংঘের সদস্যবৃন্দ যাকাত তহবিল গঠন করেছেন। উক্ত তহবিল থেকে কিছু সংখ্যক সর্বহারা (এতিম) ও বিধবা মাহিলাকে সাহায্য প্রদান করা হইয়াছে। এই ব্যবস্থা ভবিৎসতে আর সম্প্রসারন করার কর্মসূচী রহিয়াছে। স্বজন কল্যান সংঘের আওতাভূক্ত বেকার যুবকদের কর্ম সংস্থান ব্যতীত স্বজনদের সামাজিক নৈতিক ও আর্থিক উন্নয়ন সম্ভব নয় বলে স্বজন কল্যাণ সংঘের সদস্যবৃন্দ মনে করে। </p>
					<p>সেবা তহবিল গঠন ও বিতরন ব্যতীত এই সংগঠন স্বজন ছাত্রদের সংগঠন করে সঠিক পঠন-পাটনের মাধ্যমে নিজের জীবন গঠন উদ্ধুদ্ধ করতে উদ্যোগ নিয়েছে। বেকার যুবকদের কর্মক্ষম করতে ভবিষ্যতের সহাঢক তহবিল গঠন করার কর্মসূচী নেয়া হবে। সামাজিক অবক্ষয় রোধে সাংস্কৃতিক কর্মকান্ড ও প্রতিযোগিতার আয়োজন করা হবে।</p>
					<p>তাই উল্লেখিত লক্ষ্য সমূহের সঠিক মূল্যায়ন ও পূর্ণাঙ্গ বাস্তবায়নের জন্য সকল স্তরের স্বজনদের বিজ্ঞ ও সুচিন্তিত মতামত, সঠিক ও সার্বিক সহযোগিতা স্বজন কল্যাণ সংঘের একান্ত কাম্য।</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section  class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Latest Donations</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
@foreach ($donate as $donate_data)
	        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url({{ asset('assets/img/donation/'. $donate_data->image) }});"></div>
        				<div class="info ml-4">
        					<h3><a href="">{{ $donate_data->name }}</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>৳{{ $donate_data->amount }}</span> for <a href="#">{{ $donate_data->donation_type }}</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
      @endforeach


        </div>
      </div>
    </section>

    
    {{-- Footer --}}
      @include('footer')
    {{-- Footer --}}
    
  </body>
</html>

