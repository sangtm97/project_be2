@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="category">Tên danh mục</label>
                <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
    </form>
@endsection
