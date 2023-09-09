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
                        <h1 class="m-0 text-dark">Dashboard</h1>
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
            <div class="card col-8 offset-2">
                <div class="card-header">
                    welcom in my dashboard
                </div>
                <div class="card-body">
                    this is chrair mohamed nadir
                </div>
                <div>
                    {{ App::getlocale() }}
                </div>
            </div>
        </section>
    </div>
@endsection
