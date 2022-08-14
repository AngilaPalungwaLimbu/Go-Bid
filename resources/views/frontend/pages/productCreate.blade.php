@extends('frontend.dashboard')
@section('content')
<div class="container  bg-white p-4 b-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header ">
                <span class="fs-4 fw-bold">Add New Product</span>
                <a href="/product" class="float-end btn btn-info text-white">Back</a>
            </div>
            <div class="card-body">

                <form action="/product" , method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product name<span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter product name">
                    </div>

                    <div class="form-group">
                        <label for="name"> Category <span class="text-danger">*</span></label>

                        <select name="category_id" id="category_id" class="form-select form-control select2" >
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="startingPrice">Starting Price<span class="text-danger">*</span></label>
                        <input type="number" min="0" name="startingPrice" id="startingPrice" class="form-control"
                            placeholder="Enter product starting price">
                    </div>
                    <div class="form-group">
                        <label for="endingTime">Ending Date<span class="text-danger">*</span></label>
                        <input type="datetime-local" min ="{{ $currentDate }}" name="endingTime"  class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="image">Image<span class="text-danger">*</span></label>
                        <input type="file" name="image" id="image" class="form-control"
                            accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" rows="3"></textarea>
                    </div>
                    <input type="text" name="seller_id" id="" hidden >
                    <button type="submit" class="btn btn-info text-white mt-2">Save product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
