<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SKS1978.com</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css ')}}">
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css ')}}"> --}}
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css ')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css ')}}">
  {{-- <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css ')}}"> --}}
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css ')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css ')}}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css ')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css ')}}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      button.close {
        outline: none;
        font-size: 25px;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

@yield('content')
 
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2025 <a target="_blank" href="https://sks1978.com/">SKS1978</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<script>
  $.widget.bridge('uibutton', $.ui.button)

    $(function () {
    $("#DataTable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

 

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
{{-- <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('admin/js/adminlte.js')}}"></script>
<script src="{{ asset('admin/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('admin/js/demo.js')}}"></script>

<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

 @if (Session::has('message'))
    <script>
        toastr.options = {
                          "closeButton": false,
                          "debug": false,
                          "newestOnTop": false,
                          "progressBar": true,
                          "positionClass": "toast-top-center",
                          "preventDuplicates": false,
                          "onclick": null,
                          "showDuration": "200",
                          "hideDuration": "1000",
                          "timeOut": "2000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
        toastr.success("{{ session('message') }}")
    </script>
    @endif

    <script>
      $(document).on('click','.UserModalShow',function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let email = $(this).data('email');
      });
    </script>
    
</body>
</html>
