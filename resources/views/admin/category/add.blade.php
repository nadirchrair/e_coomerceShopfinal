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
                        <h1 class="m-0 text-dark"> {{ trans('admin_sidebar_trans.add') }} </h1>
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
        <form action="{{ route('categorie.store', $item->id) }}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.name_ar') }}</label>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" name="name_ar">

                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.name_en') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="text" class="form-control" name="name_en">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.slug') }}</label>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" name="slug">

                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.image') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="file" class="form-control" name="image">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.desc_ar') }}</label>
                    <div class="input-group mb-3 ">

                        <textarea name="description_ar" id="" cols="3" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.desc_en') }}</label>
                    <div class="input-group mb-3 col">
                        <textarea name="description_en" id="" cols="3" rows="3" class="form-control"></textarea>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.is_shopping') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="checkbox" name="is_shopping">
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.is_popular') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="checkbox" name="is_popular">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.meta_title_ar') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="text" class="form-control" name="meta_title_ar">
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.meta_title_en') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="text" class="form-control" name="meta_title_en">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.meta_desc_ar') }}</label>
                    <div class="input-group mb-3 ">

                        <textarea type="text" cols="3" rows="3" class="form-control" name="meta_description_ar"></textarea>
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.meta_desc_en') }}</label>
                    <div class="input-group mb-3 col">
                        <textarea type="text" cols="3" rows="3" class="form-control" name="meta_description_en"></textarea>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('admin_sidebar_trans.meta_keyword') }}</label><span
                        class="text-danger">{{ trans('admin_sidebar_trans.meta_keyword') }}</span>
                    <div class="input-group mb-3 ">
                        <textarea cols="3" rows="3" class="form-control" name="meta_keywords"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="btn btn-outline-primary mb-4">{{ trans('admin_sidebar_trans.submit') }}</button>
        </form>

    </div>
@endsection
@section('scriptjs')
@endsection
