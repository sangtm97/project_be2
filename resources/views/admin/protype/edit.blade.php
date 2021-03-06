@extends('admin.main')

@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
    <form action="{{route('updateprotypes', $protypes->id)}}" method="POST">
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="protype">Protype name</label>
                <input type="text" value="{{ old('protype_name') ?? $protypes->protype_name}}" name="protype_name" class="form-control" id="exampleInputEmail1" placeholder="Enter protype name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection
