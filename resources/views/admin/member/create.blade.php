<div class="modal fade" id="MemberModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Member Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('member.store') }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          <div class="form-group row ">
            <label for="image" class="col-sm-2 col-form-label"> Image </label>
            <div class="col-sm-10">
              <label class="custom-file-label" for="image">Choose Member Image width-350px height-350px</label>
              <input type="file" name="image" class="custom-file-input" id="image">
            </div>
          </div>
          <div class="form-group row">
            <label for="Occupation" class="col-sm-2 col-form-label">Occupation</label>
            <div class="col-sm-10">
              <input type="text" name="position" class="form-control" id="Occupation" placeholder="Member Occupation">
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text"  name="name" required class="form-control" id="name" placeholder="Member Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="number" required name="phone" class="form-control" id="phone" placeholder="Member Phone Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="district"  class="col-sm-2 col-form-label">District</label>
            <div class="col-sm-10">
              <input type="text"  required name="district" class="form-control" id="district" placeholder="District Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input type="text" required name="address" class="form-control" id="address" placeholder="Your Address Name">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Member Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>