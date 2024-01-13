@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{ route('updatePassword') }}" method="post" > 
          @csrf 
            <div class="form-group">
                <div class="row">
                    <label for="oldPasswordInput" class=" col-md-2">Current Password</label>
                    <div class=" col-md-10">
                        <input type="password" required name="old_password" id="oldPasswordInput" class="form-control" autofocus  placeholder="Current Password">
                    @error('old_password')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label for="newPasswordInput" class="col-md-2">New Password</label>
                    <div class="col-md-10">
                        <input type="password" required name="new_password" id="newPasswordInput" class="form-control" autofocus  placeholder="New Password">
                    @error('new_password')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
               <label for="confirmNewPasswordInput" class="col-md-2">Confirm New Password</label>
                    <div class="col-md-10">
                    <input required name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput" placeholder="Confirm New Password">
                    </div>
                </div>
            </div>

          <div class="float-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Password Change</button>
          </div>
        </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div>
    </section>


</div>

@endsection