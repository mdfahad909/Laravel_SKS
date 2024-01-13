@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Message Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Message</a></li>
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
                <h3 class="card-title">Message Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="100px">SL NO</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th width="160px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;  
                    @endphp
                    @foreach ( $message as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></td>
                            <td>
                                <a href="#" onclick="modal_open_by_url('{{ route('message.show', $data->id) }}')" class="btn btn-sm btn-success" data-toggle="modal" data-target="#MessageModalShow">View</a>

                                <form action="{{route('message.destroy', $data->id )}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th width="130px">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


        </div>
      </div>
    </section>


  {{-- Message Modal Start --}}
    <div class="modal fade" id="MessageModalShow" tabindex="-1" aria-labelledby="MessageModalShow" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="modal_div">
      </div>
    </div>
  {{-- Message Modal End --}}
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




