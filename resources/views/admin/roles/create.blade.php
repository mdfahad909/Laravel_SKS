    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Role Information Create Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('roles.store') }}" method="post" enctype="multipart/form-data"> 
          @csrf 

          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" required value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="Role Name" >
            </div>
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group row">
            <label for="role" class="col-sm-3 col-form-label">Permission</label>
              <div class="col-sm-9">
                @foreach($permission as $value)
                  <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} {{ $value->name }} // </label>
                @endforeach
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Role Save</button>
          </div>
        </form>
      </div>
    </div>



