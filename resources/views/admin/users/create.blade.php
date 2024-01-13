   
   <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >User Information Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="User Name" >
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email Address</label>
            <div class="col-sm-9">
              <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="User Email Address" >
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password"  name="password" class="form-control" id="password" placeholder="User Password" >
            </div>
          </div>

          <div class="form-group row">
            <label for="confirm-password" class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-9">
              <input type="password"  name="confirm-password" class="form-control" id="confirm-password" placeholder="Confirm Password" >
            </div>
          </div>


          <div class="form-group row">
            <label for="role" class="col-sm-3 col-form-label">Role</label>
            <div class="col-sm-9">
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>


