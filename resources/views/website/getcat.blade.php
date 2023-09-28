@extends('website.layouts.base')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ Storage::url($categorie->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $categorie->name }}</h5>
                        <p class="card-text">{{ $categorie->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
