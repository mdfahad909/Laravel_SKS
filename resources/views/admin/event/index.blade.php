@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Event Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Event</a></li>
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
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EventModal">Event Create</button>
                    </div>
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Event Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="100px">SL NO</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th width="150px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;  
                    @endphp
                    @foreach ( $event as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img width="100" src="{{ asset('assets/img/event/'.$data->image) }}" alt=""></td>
                            <td>{{ date('d-m-Y', strtotime($data->date)); }}</td>
                            <td>{{ date("h:i A", strtotime($data['time'])); }}</td>

                            <td>
                                <a href="#" onclick="modal_open_by_url('{{ route('event.show', $data->id) }}')" class="btn btn-sm btn-info" data-toggle="modal" data-target="#EventModalShow">View</a>


                                @can('event-edit')
                                  <a href="#" onclick="modal_open_by_url('{{ route('event.edit', $data->id) }}')" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#EventModalShow">Edit</a>
                                @endcan

                                @can('event-delete')
                                <form action="{{route('event.destroy', $data->id )}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit"  onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL NO</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Time</th>
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

    {{-- Event Modal Start --}}
      @include('admin.event.create')
      <div class="modal fade" id="EventModalShow" tabindex="-1" aria-labelledby="EventModalShow" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="modal_div">

        </div>
      </div>
    {{-- Event Modal End --}}

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




