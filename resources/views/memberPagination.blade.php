      <div class="container">
        <div class="row">
			@foreach ($member as $member_item )
			@if ($member_item->status==1)
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url({{ asset('assets/img/member/'. $member_item->image) }});"></div>
        				<div class="info ml-4">
        					<h3><a href="">{{ $member_item->name }}</a></h3>
        					<span class="position">Developer</span>
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

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
			    {{ $member->links('pagination::default') }}
            </div>
          </div>
        </div>
      </div>