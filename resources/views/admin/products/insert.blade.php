@extends('admin.master')
@section('title')
    {{ trans('products_trans.products') }}
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
        <form action="{{ route('products.store') }}" method='POST' enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.categorie_id') }}</label>
                    <div class="input-group mb-3 ">
                        <select name="categorie_id" id="" class="form-control">
                            <option value=""></option>
                            @foreach ($categorie as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.name') }}</label>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" name="name">

                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('products_trans.slug') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="text" class="form-control" name="slug">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.short_description') }}</label>
                    <div class="input-group mb-3 ">
                        <textarea cols="3" rows="3"class="form-control" name="short_description"></textarea>

                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('products_trans.description') }}</label>
                    <div class="input-group mb-3 col">
                        <textarea cols="4" rows="4" class="form-control" name="description"></textarea>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.price') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="text" name="price" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('products_trans.selling_price') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="text" name="selling_price" class="form-control" />

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.image') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('products_trans.qty') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="text" name="qty" class="form-control">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.tax') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="text" class="form-control" name="tax">
                    </div>
                </div>

                <div class="col">
                    <label for="">{{ trans('products_trans.meta_title') }}</label>
                    <div class="input-group mb-3 col">
                        <textarea type="text" cols="3" rows="3" class="form-control" name="meta_title"></textarea>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.trend') }}</label>
                    <div class="input-group mb-3 ">

                        <input type="checkbox" value="{{ old('trend') }}" class="form-control" name="trend">
                    </div>
                </div>
                <div class="col">
                    <label for="">{{ trans('products_trans.status') }}</label>
                    <div class="input-group mb-3 col">
                        <input type="checkbox" class="form-control" name="status" value="{{ old('status') }}">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">{{ trans('products_trans.meta_keywords') }}</label>
                    <div class="input-group mb-3 ">
                        <textarea cols="3" rows="3" class="form-control" name="meta_keywords"></textarea>
                    </div>
                </div>

                <div class="col">
                    <label for="">{{ trans('products_trans.meta_descrption') }}</label>
                    <div class="input-group mb-3 ">
                        <textarea cols="3" rows="3" class="form-control" name="meta_descrption"></textarea>
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
