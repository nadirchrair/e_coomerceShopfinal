<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('admin.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.layouts.navabr')

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')

        <!-- /.content-header -->

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.layouts.footer_scripts')
</body>

</html>
