<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('back/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('back/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('back/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('back/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('back/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/img/DGTEC Logo blue.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        @include('partials.navbar')

        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('partials.admin_footer')

    </div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('back/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- ChartJS -->
    <script src="{{ url('back/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('back/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('back/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('back/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('back/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('back/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('back/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('back/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- adminLTE App -->
    <script src="{{ url('back/dist/js/adminlte.js') }}"></script>
    <!-- adminLTE for demo purposes -->
    <script src="{{ url('back/dist/js/demo.js') }}"></script>
    <!-- adminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('back/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('dist/js/jquery.toast.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                "paging": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('back/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('back/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('back/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('back/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $(document).on('click', '.btn-add-photo', function(e) {
                e.preventDefault();

                var controlForm = $('.controls-photo:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add-photo')
                    .removeClass('btn-add-photo').addClass('btn-remove-photo')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove-photo', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });

            $(document).on('click', '.btn-add-telechargement', function(e) {
                e.preventDefault();

                var controlForm = $('.controls-telechargement:first'),
                    currentTelechargement = $(this).parents('.telechargement:first'),
                    newTelechargement = $(currentTelechargement.clone()).appendTo(controlForm);

                newTelechargement.find('input').val('');
                controlForm.find('.telechargement:not(:last) .btn-add-telechargement')
                    .removeClass('btn-add-telechargement').addClass('btn-remove-telechargement')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash fa-remove-telechargement"></span>');
            }).on('click', '.btn-remove-telechargement', function(e) {
                $(this).parents('.telechargement:first').remove();

                e.preventDefault();
                return false;
            });
        });
    </script>



</body>

</html>
