@extends('admin.main')

@section('content')
{{-- Form edit category --}}
    <form action="{{route('update', $categories->id)}}" method="POST">
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="category">Category name</label>
                <input type="text" value="{{ old('category_name') ?? $categories->category_name}}" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection
