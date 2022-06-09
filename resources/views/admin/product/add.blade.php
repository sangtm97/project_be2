@extends('admin.main')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="product">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Product Name">
                </div>

                <div class="form-group">
                    <label for="product">Product Description</label>
                    <input type="text" name="product_description" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Product Description">
                </div>
                <div class="form-group">
                    <label for="product">Product Image</label>
                    <input type="file" name="file_upload" class="form-control" id="exampleInputEmail1"
                        placeholder="Choose Product Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="product">Product Price</label>
                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Product Price">
                </div>
                <div class="form-group">
                    <label for="product">Endow</label>
                    <select name="endow_id">
                        @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->endow_name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
    @csrf
</form>
@endsection
