@extends('admin.main')

@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
    <form action="{{route('search')}}" method="GET" style="margin-left:60%; margin-bottom: -18px;">
        <div class="form-group" style="display: flex; gap: 2px;">
          <input type="search" name="search" class="form-control">
          <span class="form-group-btn">
            <button type="submit" class="btn btn-warning">Search</button>
          </span>
        </div>
      </form>
  </div>
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
                    {{--btn edit category --}}
                    <a class="btn btn-primary btn-sm" href="{{route('edit', $category->id)}}">
                        Edit
                    </a>
                    {{-- btn delete --}}
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
