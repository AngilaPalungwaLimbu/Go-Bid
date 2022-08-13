@extends('frontend.dashboard')
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div >
                <h5 class="fs-5 fw-bold my-3"> Fill the form to be a seller</h5>
            </div>
            <div >

                <form action="/seller" , method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group mb-3">
                        <label for="address">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Enter your address">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            placeholder="Enter your number">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Photocopy of your citizenship<span class="text-danger">*</span></label>
                        <input type="file" name="image" id="image" class="form-control"
                            accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
