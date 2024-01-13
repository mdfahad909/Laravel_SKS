@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Goal Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Goal</a></li>
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
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GoalModal">Goal Create</button>
                    </div>
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Goal Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="100px">SL NO</th>
                    <th>Heading</th>
                    <th>Details</th>
                    <th width="160px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;  
                    @endphp
                    @foreach ( $goal as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->heading }}</td>
                            {{-- <td>{{ $data->text }}</td> --}}
                            <td>{{ Str::limit($data->text, 50) }}</td>

                            <td>
                                <a href="#" onclick="modal_open_by_url('{{ route('goal.show', $data->id) }}')" class="btn btn-sm btn-success" data-toggle="modal" data-target="#GoalModalShow">View</a>

                                <a href="#" onclick="modal_open_by_url('{{ route('goal.edit', $data->id) }}')" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#GoalModalShow">Edit</a>

                                <form action="{{route('goal.destroy', $data->id )}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit"  onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th width="100px">SL NO</th>
                    <th>Heading</th>
                    <th>Details</th>
                    <th width="160px">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


        </div>
      </div>
    </section>

      @include('admin.goal.create')


  {{-- Goal Modal Start --}}
    <div class="modal fade" id="GoalModalShow" tabindex="-1" aria-labelledby="GoalModalShow" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="modal_div">
      </div>
    </div>
  {{-- Goal Modal End --}}
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




