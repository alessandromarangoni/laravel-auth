@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="pt-4">
                        <a href="{{ url('admin/portfolio-show-all') }}" class="btn btn-primary">vai al portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
