<div class="modal fade" id="GoalModal" tabindex="-1" aria-labelledby="GoalModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Goal Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('goal.store') }}" method="post" enctype="multipart/form-data">
           @csrf 
          <div class="form-group row ">
            <label for="img" class="col-sm-2 col-form-label"> Image </label>
            <div class="col-sm-10">
              <label class="custom-file-label" for="img">Choose Goal Image</label>
              <input type="file" name="img" class="custom-file-input" id="img">
            </div>
          </div>
          <div class="form-group row">
            <label for="heading" class="col-sm-2 col-form-label"> Heading </label>
            <div class="col-sm-10">
              <input type="text" required name="heading" class="form-control" id="heading" placeholder="Goal Heading">
            </div>
          </div>
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
              <textarea required name="text" class="form-control" id="text" cols="10" rows="5" placeholder="Goal Details"></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Goal Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>