@extends('dashboard.layout.layout')

@section('title1', 'Product Create')
@section('title3', 'Product Create')

@section('body')

    @if ($errors->any())
        @csrf
        <div class="alert alert-danger" role="alert">
            <ui>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ui>
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if ($errors->any())
                            @csrf
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="quickForm" action="{{ route('dashboard.products.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name='category_id' class="form-control" id="exampleInputEmail1">
                                        <option value="">Category</option>
                                        @foreach ($Categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @foreach ($category->child as $child)
                                                <option value="{{ $child->id }}">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;{{ $child->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photo</label>
                                    <input class="form-control dropify" type="file" id="formFile" name="image"
                                        data-default-file="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="product name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product description</label>
                                    <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                                        placeholder="product description">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                        placeholder="price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price after discount</label>
                                    <input type="number" name="discount_price" class="form-control" id="exampleInputEmail1"
                                        placeholder="price discount">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">save</button>
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
