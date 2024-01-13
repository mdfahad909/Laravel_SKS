@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Role Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Roles</a></li>
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
                        <button class="btn btn-success" onclick="modal_open_by_url('{{ route('roles.create') }}')" data-toggle="modal" data-target="#RoleModalShow"> Create New Role</button>
                    </div>
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Role Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="100px">SL NO</th>
                    <th>Name</th>
                    <th width="200px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>

                        <a href="#" onclick="modal_open_by_url('{{ route('roles.show',$role->id) }}')" class="btn btn-sm btn-info" data-toggle="modal" data-target="#RoleModalShow">View</a>

                        @can('role-edit')
                        <a href="#" onclick="modal_open_by_url('{{ route('roles.edit',$role->id) }}')" class="btn btn-sm btn-success" data-toggle="modal" data-target="#RoleModalShow">Edit</a>
                        @endcan


                        @can('role-delete')
                          <form action="{{route('roles.destroy', $role->id )}}" method="post" class="d-inline">
                              @csrf
                              <input type="hidden" name="_method" value="delete">
                              <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL NO</th>
                    <th>Name</th>
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
  {{-- Role Modal Start --}}
    <div class="modal fade" id="RoleModalShow" tabindex="-1" aria-labelledby="RoleModalShow" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="modal_div">

      </div>
    </div>
  {{-- Role Modal End --}}
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

@endsection

