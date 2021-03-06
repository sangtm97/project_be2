@extends('admin.main')

@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Endow name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($endows as $endow)
            <tr>
                <td>{{$endow->id}}</td>
                <td>{{$endow->endow_name}}</td>
                <td style="display: flex;gap: 6px">
                    <a class="btn btn-primary btn-sm" href="{{route('editendows', $endow->id)}}">
                        Edit
                    </a>
                    <form action="{{route('destroyendows', $endow->id)}}" method="POST">
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