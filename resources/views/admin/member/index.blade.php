@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Member Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Member</a></li>
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
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MemberModal">Member Create</button>
                    </div>
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Member Management Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th width="100px">SL NO</th>
                    <th>Name</th>
                    <th>Occupation</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th width="160px">Action</th>
                  </tr>
                  </thead>
                  <tbody class="text-center">
                    @php
                      $i = 1;  
                    @endphp
                    @foreach ( $member as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->position }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>
                              <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>

                            </td>
                            <td>
                                <a href="#" onclick="modal_open_by_url('{{ route('member.show', $data->id) }}')" class="btn btn-sm btn-success" data-toggle="modal" data-target="#MemberModalShow">View</a>

                                @can('member-edit')
                                  <a href="#" onclick="modal_open_by_url('{{ route('member.edit', $data->id) }}')" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#MemberModalShow">Edit</a>
                                @endcan

                                @can('member-delete')
                                  <form action="{{route('member.destroy', $data->id )}}" method="post" class="d-inline">
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
                  <tr class="text-center">
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Occupation</th>
                    <th>Phone</th>
                    <th>Status</th>
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

    {{-- Member Modal Start --}}
      @include('admin.member.create')
    {{-- Member Modal End --}}

  {{-- Member Modal Start --}}
    <div class="modal fade" id="MemberModalShow" tabindex="-1" aria-labelledby="MemberModalShow" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="modal_div">
      </div>
    </div>
  {{-- Member Modal End --}}
  
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


    $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var member_id = $(this).data('id'); 
         
        $.ajax({
            'url': '{{ route('changeStatus') }}',
            'type' : 'GET',
            'data': {'status': status, 'member_id': member_id},
            success: function(response){
              // alert('Success')
            }
        });
    })
  })
</script>

  <!-- /.content-wrapper -->
@endsection




