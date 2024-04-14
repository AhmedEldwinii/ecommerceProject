@extends('dashboard.layout.layout')

@section('title1', 'Product Edit')
@section('title3', 'Product Edit')

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
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form id="quickForm" action="{{ route('dashboard.products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name='category_id' class="form-control" id="exampleInputEmail1" required>
                                        <option value="" selected>Category</option>
                                        @foreach ($Categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}
                                            </option>
                                            @foreach ($category->child as $child)
                                                <option value="{{ $child->id }}"
                                                    @if ($child->id == $product->category_id) selected @endif>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;{{ $child->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Main Photo</label>
                                    <input class="form-control dropify" type="file" id="formFile" name="image"
                                        data-default-file=" {{ asset($product->image) }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="product name" value='{{ $product->name }}'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product description</label>
                                    <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                                        placeholder="product description"> {{ $product->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputEmail1"
                                        placeholder="price" value='{{ $product->price }}'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price after discount</label>
                                    <input type="number" name="discount_price" class="form-control" id="exampleInputEmail1"
                                        placeholder="price discount" value = '{{ $product->discount_price }}'>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity of product</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1"
                                        placeholder="Quantity" value="{{ $product->quantity }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Colors for product</label>
                                    <select class="form-control colors" multiple="multiple" name="colors[]"
                                        value = '{{ $product->color }}'></select>
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photos of the product</label>
                                    <input class="form-control dropify" type="file" id="formFile" name="images[]"
                                        multiple data-default-file="">
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

@push('javascripts')
    <script>
        $('.colors').select2({
            tags: true
        });
    </script>
@endpush
