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
            <div class="card">
                @foreach ($singlecat as $item)
                    <h1>{{ $item->name }}</h1>
                    <h1></h1>
                    <h1></h1>
                @endforeach

            </div>
        </div>
        <section class="content">


        </section>
    </div>
@endsection
@section('scriptjs')
@endsection
