@extends('frontend.dashboard')
@section('content')

    <div class="container-fluid bg-grey py-4 ">
        <div class="container p-3 bg-white">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-5">
                    <form action="/bid" method="post">
                        @csrf
                        <h2>{{ $product->name }}</h2>
                        <p class="fs-4 "> {!! $product->description !!}</p>
                        {{-- <a href=""><p class="fs-4 ">Category: {{ $product->ca}}</p></a> --}}
                        <p class="fs-5 ">Owner: {{ $product->seller->user->name }}</p>
                        <p class="fs-5 ">Starting Price: NRs.{{ $product->startingPrice }}</p>
                        <p class="fs-5 ">End Date: <span class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($product->endingTime)->format('Y/m/d h:i:s') }}"></span>
                        </p> 

                        <input type="text" name="product_id" value="{{ $product->id }} " hidden>

                        @if ($product->endingTime < $currentDate)
                            <p>Bidding time has expired </p>
                            {{-- <p> The winner of the auction is {{ $winner->user->name }}</p> --}}
                            @if(empty($winner))
                                <h5 class="p-4"></h5>
                            @else
                            <p> The winner of the auction is {{ $winner->user->name }}</p>
                            @endif
                        @else
                            @if (Auth::user()->id == $product->seller->user_id)
                                <input type="number" class="" min="{{ $product->startingPrice }}" name="price"
                                    hidden>
                            @else
                                <input type="number" class="" min="{{ $product->startingPrice }}" name="price">
                                <button type="submit" class="btn btn-success sm py-1 px-4 fw-bold ">Bid</button>
                            @endif
                        @endif

                    </form>
                </div>
            </div>
            @if ($bids->isEmpty())
                <h5 class="p-4"></h5>
            @else
                <div class="container">
                    <h2>Bidders</h2>
                    <div class="row">
                        <div class="col-md-9">

                            <table class="table ">
                                <tr>
                                    <th>SNo.</th>
                                    <th>Bidder Name</th>
                                    <th>Price</th>
                                </tr>
                                @foreach ($bids as $bid)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bid->user->name }}</td>
                                        <td>{{ $bid->price }} </td>

                                    </tr>
                                @endforeach

                            </table>


                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>


@endsection
