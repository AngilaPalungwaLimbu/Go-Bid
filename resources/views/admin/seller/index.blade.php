@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">View All Sellers</span>
                        {{-- <a href="/category/create" class="float-end btn btn-info"><i class="fas fa-plus"></i><span
                                class="hide-menu ps-2">Add Category </span></a> --}}
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th> Email</th>
                                            <th> Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sellers as $seller)
                                            <tr>
                                                <td>{{ $seller->user->name }}</td>
                                                <td>{{ $seller->user->email }}</td>
                                                <td>{{ $seller->phone }}</td>
                                                <td>{{ $seller->address }}</td>
                                                <td>
                                                    <form action="/seller/{{ $seller->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                        <a href="/seller/{{ $seller->id }}" class="btn btn-sm btn-success text-whiteJ"
                                                            >Details</a>
                                                    </form>
                                                </td>
                                                <td>
                                                    @if ($seller->user->role=='seller')
                                                    <button class="btn btn-info btn-sm">Verified</button>
                                                    @else
                                                    <form action="/seller/{{ $seller->id }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="text" name="role" value="seller" hidden>
                                                        <button class="btn btn-info btn-sm">Verify</button>

                                                    </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

