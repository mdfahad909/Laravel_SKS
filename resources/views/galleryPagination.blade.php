		<div class="container-fluid">
			<div class="row">
				@foreach ($gallery as $gallery_data)
					<div class="col-md-3">
						<a  href="{{ asset('assets/img/gallery/'.$gallery_data->image.'') }}" class="gallery g_img image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('assets/img/gallery/'.$gallery_data->image) }});">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search"></span>
							</div>
						</a>
					</div>
				@endforeach


			</div>
				<div class="row m-auto mt-4 mb-4 GPagination">
				<div class="col text-center">
					<div class="block-27">
						{{ $gallery->links('pagination::default') }}
					</div>
				</div>
				</div>
		</div>