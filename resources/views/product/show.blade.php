@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['product']->getname() }} (${{ $viewData['product']->getprice() }})
                </h5>
                <p class="card-text">{{ $viewData['product']->getdescription() }}</p>
                <p class="card-text"><small class="text-muted">Add to Cart</small></p>
            </div>
        </div>
    </div>
</div>
@endsection
