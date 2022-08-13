@extends('frontend.dashboard')
@section('content')

    <div class="container-fluid bg-grey py-4 ">
       <div class="container">
        <h3>Name: {{ Auth::user()->name }} </h3>
        <h3>Email: {{ Auth::user()->email }} </h3>




       </div>
    </div>


@endsection
