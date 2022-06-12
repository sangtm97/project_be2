@extends('admin.main')

@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Protype name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($protypes as $protype)
            <tr>
                <td>{{$protype->id}}</td>
                <td>{{$protype->protype_name}}</td>
                <td style="display: flex;gap: 6px">
                    <a class="btn btn-primary btn-sm" href="{{route('editprotypes', $protype->id)}}">
                        Edit
                    </a>
                    <form action="{{route('destroyprotypes', $protype->id)}}" method="POST">
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
