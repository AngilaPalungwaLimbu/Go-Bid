
@extends('admin.app')

@section('content')
    <div class="container">
        <h4 class="fw-bold">Auctions </h4>
        <hr>
        <div class="row g-4">

            @foreach ($products as $product)
                <div class="col-md-3  col-6 ">
                    <a href="/product-detail/{{ $product->id }}" class="text-dark text-decoration-none">
                        <div class="card border-1 pborder rounded-0 mb-0">
                            <div class="card-body p-1">
                                <img src="{{ asset($product->image) }} " class="img-fluid img-height" alt="">

                            </div>
                            <div class="card-footer p-3">
                                <p class="fs-5">{{ $product->name }}</p>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
