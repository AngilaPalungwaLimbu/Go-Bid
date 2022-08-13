@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold"> Setting</span>
                    <a href="/company" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/company/" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name" value="{{ $company->name }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address" value="{{ $company->address }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact <span class="text-danger">*</span></label>
                                    <input type="text" name="contact" id="contact" class="form-control"
                                        placeholder="Enter your number" value="{{ $company->contact }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Enter your email" value="{{ $company->email }}">
                                </div>
                            </div>
                        </div>

                       <div class="row">
                        <div>
                            <img src="{{asset($company->logo)}}" width="64 px" class="img-fluid" alt="">
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Upload logo </label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    <img src="{{asset($company->logo)}}" width="64 px" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook URL <span class="text-danger">*</span></label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        placeholder="Enter your facebook url" value="{{ $company->facebook }}">
                                </div>
                            </div>
                       </div>

                        <button type="submit" class="btn btn-info">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
