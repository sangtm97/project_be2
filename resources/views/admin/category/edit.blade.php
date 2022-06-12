@extends('admin.main')

@section('content')
{{-- form update category --}}
    <form action="{{route('updatecategories', $categories->id)}}" method="POST">
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="category">Category name</label>
                <input type="text" value="{{ old('category_name') ?? $categories->category_name}}" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection
