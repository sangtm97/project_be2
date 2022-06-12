@extends('admin.main')

@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="endow">Endow Name</label>
                <input type="text" name="endow_name" class="form-control" id="exampleInputEmail1" placeholder="Enter endow Name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        @csrf
    </form>
@endsection
