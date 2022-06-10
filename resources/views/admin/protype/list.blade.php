@extends('admin.main')
<!-- delete protype -->
@section('content')
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
                <!-- btn edit -->
                    <a class="btn btn-primary btn-sm" href="{{route('editprotypes', $protype->id)}}">
                        Edit
                    </a>
                    <!-- btn form delete -->
                    <form action="{{route('destroy', $protype->id)}}" method="POST">
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