@extends('admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ trans('admin_sidebar_trans.products') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <a href="{{ route('products.create') }}"
                            class="btn btn-outline-primary">{{ trans('admin_sidebar_trans.add') }}</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th> {{ trans('products_trans.name') }}
                                </th>
                                <th> {{ trans('products_trans.categorie_id') }}
                                </th>
                                <th> {{ trans('products_trans.price') }}
                                </th>
                                <th> {{ trans('products_trans.qty') }}
                                </th>
                                <th> {{ trans('products_trans.status') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>



                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection

@section('scriptjs')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>


    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
