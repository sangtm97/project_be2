@extends('admin.main')

@section('content')
    <form action="{{route('update', $products->id)}}" method="POST">
        @method('PUT')
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="product">Product Name</label>
                    <input type="text" value="{{ old('product_name') ?? $products->product_name}}" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">
                </div>

                <div class="form-group">
                    <label for="product">Product Description</label>
                    <input type="text" value="{{ old('product_description') ?? $products->product_description}}" name="product_description" class="form-control" id="exampleInputEmail1" placeholder="Enter product description">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="product">Product Price</label>
                    <input type="text" value="{{ old('product_price') ?? $products->product_price}}" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter product price">
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection
