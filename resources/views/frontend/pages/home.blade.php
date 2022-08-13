@extends('frontend.dashboard')
@section('content')
<div class="container bg-white p-4 b-4">
    <h4 class="fw-bold">Auctions </h4>
    <hr>
    <div class="row g-4">

        @foreach ($products as $product)
        <div class="col-md-3  col-6 ">
            <a href="/product_detail/{{ $product->id }}" class="text-dark text-decoration-none">
                <div class="card border-1 pborder rounded-0 ">
                    <div class="card-body ">
                        <img src="{{ asset($product->image) }} " class="img-fluid" alt="">
                    </div>
                    <div class="p-3">
                        <p class="fs-5">{{ $product->name }}</p>
                        <span class="ptext fs-4">{{ $product->startingPrice }}</span>

                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
