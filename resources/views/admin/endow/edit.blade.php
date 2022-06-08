@extends('admin.main')

@section('content')
    <form action="{{route('update', $endows->id)}}" method="POST">
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="endow">Endow name</label>
                <input type="text" value="{{ old('endow_name') ?? $endows->endow_name}}" name="endow_name" class="form-control" id="exampleInputEmail1" placeholder="Enter endow name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Endow </button>
        </div>
        @csrf
    </form>
@endsection
