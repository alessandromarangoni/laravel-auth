@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($portfolios as $portfolio)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $portfolio->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $portfolio->title }}</h5>
                    <p class="card-text">{{ $portfolio->content }}</p>
                    <a href="{{route('admin.portfolio.show', $portfolio)}}">link</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection