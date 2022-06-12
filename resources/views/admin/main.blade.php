
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      {{-- <li>
        <form action="{{route('search')}}" method="GET">
          <div class="form-group" style="display: flex; gap: 2px;">
            <input type="search" name="search" class="form-control">
            <span class="form-group-btn">
              <button type="submit" class="btn btn-primary">Search</button>
            </span>
          </div>
        </form>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    @include('admin.sidebar')


  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          @include('admin.alert')
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
              @if(session('message'))
                  <div class="alert alert-primary" style="color: #004085;background-color: #cce5ff;border-color: #b8daff;margin-bottom: -12px;" role="alert">
                      {{session('message')}}

                  </div>
              @endif
            <div class="card card-primary mt-3">
              {{-- <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
              </div> --}}
            <!-- noi dung -->
            @yield('content')



            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->
    @include('admin.footer')

</body>
</html>
