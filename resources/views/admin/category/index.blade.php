@extends('admin.master')
@section('title')
    {{ trans('admin_sidebar_trans.categorie') }}
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> {{ trans('admin_sidebar_trans.categorie') }} </h1>
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
                    <h3 class="card-title"> <a href="{{ route('categorie.create') }}"
                            class="btn btn-outline-primary">{{ trans('admin_sidebar_trans.add') }}</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> {{ trans('admin_sidebar_trans.name') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.image') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.is_shopping') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.is_popular') }}
                                </th>

                                <th> {{ trans('admin_sidebar_trans.action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td><button class="btn btn-outline-success">{{ trans('admin_sidebar_trans.view') }}</button>
                                    <button
                                        class="btn btn-outline-secondary">{{ trans('admin_sidebar_trans.edit') }}</button>
                                    <a href=""
                                        class="btn btn-outline-danger">{{ trans('admin_sidebar_trans.delete') }}</a>
                                </td>
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th> {{ trans('admin_sidebar_trans.name') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.image') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.is_shopping') }}
                                </th>
                                <th> {{ trans('admin_sidebar_trans.is_popular') }}
                                </th>

                                <th> {{ trans('admin_sidebar_trans.action') }}
                                </th>
                            </tr>
                        </tfoot>
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
