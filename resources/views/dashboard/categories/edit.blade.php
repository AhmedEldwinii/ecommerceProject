@extends('dashboard.layout.layout')

@section('title1', 'Category Edit')
@section('title3', 'Category Edit')

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
                        <form id="quickForm" action="{{ route('dashboard.categories.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="category name" value="{{ $category->name }}">
                                </div>

                                @if ($category->child_count < 1)
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Main category</label>
                                        <select name='parent_id' class="form-control" id="exampleInputEmail1">
                                            <option value="" @if ($category->parent_id == null) selected @endif>Main
                                                Category</option>
                                            @foreach ($mainCategories as $item)
                                                <option value="{{ $category->id }}"
                                                    @if ($item->id == $category->parent_id) selected @endif> {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photo</label>
                                    <input class="form-control dropify" type="file" id="formFile" name="image"
                                        data-default-file=" {{asset($category->image) }}">
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
