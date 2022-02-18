@extends('admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Content Wrapper. Contains page content -->
  <section class="content">
      @include('alert')
      <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add and Create new category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="category/store" method="POST">
                <div class="card-body">
                  <div class="form-group">
                      <label for="category">Categories:</label>
                      <input type="text" name="name" class="form-control" id="category" placeholder="category">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Status">Status:</label>
                        <input type="text" class="form-control" name="status" id="Status" placeholder="Status">
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
              </form>
            </div>

          </div>
            <!-- /.content-wrapper -->
        </div>

  </section>
@endsection
