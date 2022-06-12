@extends('admin.main')
<!-- Add protype -->
@section('content')
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="protype">Protype Name</label>
                <input type="text" name="protype_name" class="form-control" id="exampleInputEmail1" placeholder="Enter protype Name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        @csrf
    </form>
@endsection
