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
                                <th>id</th>
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

                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}
                                    </td>
                                    <td><img class="img-thumbnail mw-100" src="{{ Storage::url($item->image) }}"
                                            alt=""></td>
                                    <td>

                                        @if ($item->is_shopping == 1)
                                            <span class="badge badge-success">showing</span>
                                        @else
                                            <span class="badge badge-danger">hiden</span>
                                        @endif
                                    </td>

                                    <td>

                                        @if ($item->is_popular == 1)
                                            <span class="badge badge-success">popular</span>
                                        @else
                                            <span class="badge badge-danger">not popular</span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('categorie.show', $item->id) }}"
                                            class="btn btn-outline-success">{{ trans('admin_sidebar_trans.view') }}</a>
                                        <a href="{{ route('categorie.edit', $item->id) }}"
                                            class="btn btn-outline-secondary">{{ trans('admin_sidebar_trans.edit') }}</a>
                                        <form action="{{ route('categorie.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


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
