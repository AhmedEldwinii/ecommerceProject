@extends('dashboard.layout.layout')

@section('title1', 'Category Add')
@section('title3', 'Category Add')

@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Main category</label>
                                    <input type="text" name="main" class="form-control" id="exampleInputEmail1"
                                        placeholder="Main category">
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photo</label>
                                    <input class="form-control dropify" type="file" id="formFile" name="photo" data-default-file="">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="save" class="btn btn-primary">save</button>
                            </div>
                        </form>
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
@endsection
