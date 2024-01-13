
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

              
                <li class="ftco-animate"><a href="{{ $info->twitter??'' }}"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="{{ $info->facebook??'' }}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="{{ $info->instagram??'' }}"><span class="icon-instagram"></span></a></li>
               
               
              </ul>
            </div>
          </div>

          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('index') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ route('about') }}" class="py-2 d-block">About</a></li>
                <li><a href="{{ route('donate') }}" class="py-2 d-block">Donate</a></li>
                <li><a href="{{ route('events') }}" class="py-2 d-block">Event</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
              
	                <li><span class="icon icon-map-marker"></span><span class="text">{{ $info->address??'' }}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $info->phone??'' }}</span></a></li>
	                <li><a href="mailto:{{ $info->email??'' }}"><span class="icon icon-envelope"></span><span class="text">{{ $info->email??'' }}</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="www.sks1978.com" target="_blank">Welfare Association</a>
             </p>
          </div>
        </div>
      </div>
    </footer>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>

  <script src="{{ asset('assets/js/main.js')}}"></script>



    <!-- Custom Javascript -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items:1,
                loop:true,
                nav:true,
                dots:true,
                autoplay:true,
                autoplaySpeed:1000,
                smartSpeed:1500,
                autoplayHoverPause:true
            });
        });

        
    </script>
