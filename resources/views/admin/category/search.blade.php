@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td style="display: flex;gap: 6px">
                    <a class="btn btn-primary btn-sm" href="{{route('edit', $category->id)}}">
                        Edit
                    </a>
                    <form action="{{route('destroy', $category->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
