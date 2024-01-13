
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Event Update Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          @method('PUT')

          <div class="form-group row ">
            <label for="image" class="col-sm-2 col-form-label">Event Image </label>
            <div class="col-sm-10">
              <label class="custom-file-label" for="image">Choose Event Image</label>
              <input type="file" name="image" class="custom-file-input" id="image">
            </div>
          </div>
          <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Event Date </label>
            <div class="col-sm-10">
              <input type="date" required name="date" value="{{ $event->date }}" class="form-control" id="date">
            </div>
          </div>
          <div class="form-group row">
            <label for="time" class="col-sm-2 col-form-label">Event Time </label>
            <div class="col-sm-10">
              <input type="time" required value="{{ $event->time }}" name="time" class="form-control" id="time">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Event Address</label>
            <div class="col-sm-10">
              <input type="text" required value="{{ $event->address }}" name="address" class="form-control" id="address" placeholder="Event Address">
            </div>
          </div>
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label">Event Details</label>
            <div class="col-sm-10">
              <textarea name="text" required class="form-control" id="text" cols="10" rows="5">{{ $event->text }}</textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>








