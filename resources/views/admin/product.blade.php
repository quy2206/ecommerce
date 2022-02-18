@extends('admin')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Product</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add and Create new product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="admin/store" method="POST">
              <div class="card-body">
                <div class="form-group">
                    <label for="category">Categories:</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category">
                  </div>
                <div class="form-group">
                  <label for="productName">Product Name:</label>
                  <input type="text" class="form-control" id="productName" placeholder="">
                </div>
                <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="text" class="form-control" id="description" placeholder="" style="resize: none"></textarea>
                  </div>
                <div class="form-group">
                  <label for="image">File image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
          <!-- /.content-wrapper -->
      </div>
</section>


@endsection
