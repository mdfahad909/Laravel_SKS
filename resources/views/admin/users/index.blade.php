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
            <div class="row mb-3">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a  href="#" onclick="modal_open_by_url('{{ route('users.create') }}')" data-toggle="modal" data-target="#UserModalShow" class="btn btn-success" > Create New User</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th width="200px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($user as $user)
              @if ($user->is_email_verified==1)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="#" onclick="modal_open_by_url('{{ route('users.show', $user->id) }}')" class="btn btn-sm btn-info" data-toggle="modal" data-target="#UserModalShow">View</a>

                        @can('role-edit')
                        <a href="#" onclick="modal_open_by_url('{{ route('users.edit', $user->id) }}')" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#UserModalShow">Edit</a>
                        @endcan
                        
                        @can('role-delete')
                          <form action="{{route('users.destroy', $user->id )}}" method="post" class="d-inline">
                              @csrf
                              <input type="hidden" name="_method" value="delete">
                              <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        @endcan
                    </td>
                </tr>
              @endif
            @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div>
    </section>

  {{-- User Modal Start --}}
    <div class="modal fade" id="UserModalShow" tabindex="-1" aria-labelledby="UserModalShow" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="modal_div">

      </div>
    </div>
  {{-- User Modal End --}}

       <!-- /.content -->
</div>

<script>
    function modal_open_by_url(url=''){
    $.ajax({
      url:url,
      type:'GET',
      success:function(data){
        $('#modal_div').html(data);
      }
    })
  }
</script>

  <!-- /.content-wrapper -->
@endsection