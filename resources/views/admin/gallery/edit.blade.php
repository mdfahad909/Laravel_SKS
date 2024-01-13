
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gallery Update Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          @method('PUT')

          <div class="form-group row ">
            <label for="image" class="col-sm-2 col-form-label">Image </label>
            <div class="col-sm-10">
              <label class="custom-file-label" for="image">Update Gallery Image </label>
              <input required type="file" name="image" class="custom-file-input" id="image">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>








