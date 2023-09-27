@extends('website.layouts.base')
@section('content')
    <div class="container">

        <h1>categorie all</h1>
        <div class="row">
            @foreach ($categorie as $item)
                <div class="col-sm-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
