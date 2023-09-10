@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
    <caption>
        <form>search <input type="search" name='q' value="{{$viewData['search'] }}"></form>
    </caption>
    @foreach ($viewData['products'] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('product.show', ['id' => $product->getId()]) }}" class="btn bg-primary text-white">{{ $product->getname() }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {!! $viewData['products']->links() !!}
</div>
@endsection
