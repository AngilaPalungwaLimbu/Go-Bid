@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">Seller Detail</span>
                        {{-- <a href="/category/create" class="float-end btn btn-info"><i class="fas fa-plus"></i><span
                                class="hide-menu ps-2">Add Category </span></a> --}}
                    </div>
                    <div class="card-body">
                        <h4>Name: {{ $seller->user->name }}</h4>
                        <h4>Email: {{ $seller->user->email }}</h4>
                        <h4>Phone: {{ $seller->phone }}</h4>
                        <h4>Address: {{ $seller->address }}</h4>

                        <img src="{{ asset($seller->image) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
