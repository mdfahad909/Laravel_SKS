    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UserModalLabel">User Information Update Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data"> 
          @csrf 
          @method('PUT')

          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('name', $user->name) }}" name="name" class="form-control" id="name" placeholder="User Name" >
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email Address</label>
            <div class="col-sm-9">
              <input type="email" value="{{ old('email', $user->email) }}" name="email" class="form-control" id="email" placeholder="User Email Address" >
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
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
            </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>


    {{-- <select class="form-control " name="roles[]" >
     @foreach($user->roles as $role) 
     <option value="{{ $role->id }}" {{ $role->id == ' ' ? 'selected' : '' }}>{{ $role->name }}
    </option> 
    @endforeach 
</select> --}}

