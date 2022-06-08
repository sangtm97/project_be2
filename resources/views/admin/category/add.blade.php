@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="category">Category Name</label>
                <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category Name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        @csrf
    </form>
@endsection
