@extends('frontend.dashboard')
@section('content')
    <div class="container bg-white p-4 b-4">
        <div class="row g-4">

            @if ($products->isEmpty())
            <p>No Product found</p>
            @else
                @foreach ($products as $product)
                    <div class="col-md-3  col-6 ">
                        <a href="/product_detail/{{ $product->id }}" class="text-dark text-decoration-none">
                            <div class="card border-1 pborder rounded-0 ">
                                <div class="card-body ">
                                    <img src="{{ asset($product->image) }} " class="img-fluid img-height" alt="">
                                </div>
                                <div class="p-3">
                                    <p class="fs-5">{{ $product->name }}</p>
                                    <span class="ptext fs-4">{{ $product->startingPrice }}</span>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
