<div class="modal fade" id="GalleryModal" tabindex="-1" aria-labelledby="GalleryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GalleryModalLabel">Gallery Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          <div class="form-group row ">
            <label for="image" class="col-sm-2 col-form-label">Gallery Image </label>
            <div class="col-sm-10">
              <label class="custom-file-label" for="image">Choose Gallery Image</label>
              <input  type="file" required name="image" class="custom-file-input" id="image">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Gallery Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>