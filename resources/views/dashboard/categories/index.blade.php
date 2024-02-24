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
                <table class="table table-striped projects" id = "table_id">
                    <thead>
                        <tr>
                            <th style="width: 20%">
                                Name
                            </th>
                            <th style="width: 30%">
                                Image
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($mainCategories as $category)
                            <tr>
                                <td></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->image }}</td>
                                <td>{{ $category->created_at }}</td>
                            </tr>
                        @endforeach --}}
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

    <div class="modal fade" id ="deletemodal" tabindex ="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('dashboard.categories.delete') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('DELETE')

                    <div class ="form-group">
                        <p> Sure Delete</p>
                        @csrf
                        <input type="hidden" name ="id" id="id">
                    </div>

                </div>
                <div class="modal footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('words.close') }}</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">{{ __('words.delete') }}</button>

                </div>
            </form>

        </div>

    </div>

@endsection
@push('javascripts')
    <script type='text/javascript'>
        new DataTable('#table_id', {
            ajax: {
                url: "{{ route('dashboard.categories.getall') }}",
                type: 'get'
            },

            processing: true,
            serverSide: true,

        });


        // $(document).ready(function() {
        //     var table = $('#table_id').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: "{{ route('dashboard.categories.getall') }}",
        //         columns: [{
        //                 data: 'name',
        //                 name: 'name'
        //             },
        //             {
        //                 data: 'image',
        //                 name: 'image'
        //             },
        //             {
        //                 data: 'action',
        //                 name: 'action'
        //             },
        //         ]
        //     });

        //     $('#table_id tbody').on('click', '#deleteBtn', function() {
        //         var id = $(this).attr('data_id');
        //         $('#deletemodal #id').val(id);
        //     });
        // });
    </script>
@endpush
