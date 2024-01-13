<div class="modal fade" id="SliderModal" tabindex="-1" aria-labelledby="SliderModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="SliderModalLabel">Slider Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="heading" class="col-sm-2 col-form-label">Slider Heading </label>
                <div class="col-sm-10">
                <input type="text" name="heading" class="form-control" id="heading" placeholder="Slider Heading">
                </div>
            </div>

            <div class="form-group row ">
                <label for="image" class="col-sm-2 col-form-label">Slider Image </label>
                <div class="col-sm-10">
                <label class="custom-file-label" for="image">Choose Slider Image h-500px</label>
                <input required type="file" name="image" class="custom-file-input" id="image">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Slider Save</button>
            </div>
        </form>
      </div>

      </div>
    </div>
</div>