@php
  $info = App\Models\Information::find(1);
@endphp

@include('header')
    <div class="hero-wrap" style="background-image: url({{ asset('assets/images/contact.jpeg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">যোগাযোগের তথ্য</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> কুমিল্লা বিজ্ঞান কলেজ, বাংলাদেশ</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel:+8801711-721508">+8801711-721508</a></p>
          </div>
          <div class="col-md-3">
            <p><span>E-mail:</span> <a href="mailto:sks.bd@gmail.com">sks.bd@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="https://sks1978.com/">sks1978.bd.com</a></p>
          </div>
        </div>
        <div class="row block-9" id="contact">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">আপনি কি কিছু জানতে চান?</h4>
            <form action="{{ route('message.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="আপনার নাম লিখুন">
              </div>
              <div class="form-group">
                <input type="number" name="phone" class="form-control" placeholder="আপনার মোবাইল নাম্বার লিখুন">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="আপনার ইমেল লিখুন">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="বিষয়">
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="4" class="form-control" placeholder="বার্তা লিখুন"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary py-3 px-5">বার্তা পাঠান</button>
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="">
            <iframe src="{{ $info->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>





    {{-- Footer --}}
      @include('footer')
    {{-- Footer --}}
    
  </body>
</html>