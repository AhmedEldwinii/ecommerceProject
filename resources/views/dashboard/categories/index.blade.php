@extends('dashboard.layout.layout')

@section('title1', 'Categories')
@section('title3', 'Categories')

@section('body')
    <section class="content">

        <!-- Default box -->
        <br>
        <form action="{{ route('dashboard.categories.create') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Create new category"
                        class="text-white-50 bg-darktext-white-50 bg-dark float-right ">
                </div>
        </form>

        </div>
        <br>
        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped" id = "table_id">
                    <thead>
                        <tr>
                            <th style="width: 5%"></th>

                            <th style="width: 20%">
                                Name
                            </th>

                            <th style="width: 20%">
                                Image
                            </th>
                            <th style="width: 20%">
                                Parent
                            </th>
                            <th style="width: 20%">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>

    {{-- DELETE --}}
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('dashboard.categories.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Delete Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p style="color: aliceblue">Are you sure you want to delete this category?</p>
                            <input type="hidden" name="id" id="id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
@push('javascripts')
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.categories.getall') }}",
                columns: [{},
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    }, {

                        data: 'parent',
                        name: 'parent'

                    },
                    {
                        data: 'action',
                        name: 'action'
                    },

                ]
            });

            // Handle delete button click
            $('#table_id tbody').on('click', '#deleteBtn', function() {
                var id = $(this).data('id');
                $('#deletemodal #id').val(id);
                $('#deletemodal').modal('show');
            });
        });
    </script>
@endpush
