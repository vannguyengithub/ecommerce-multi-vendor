@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Blog Category All</h4>
                        <hr>
                        <br>
                        <br>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>blog category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach($blogcategory as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->blog_category }}</td>
                                    <td>
                                        <a href="{{ route('edit.blog.category', $item->id) }}" class="btn btn-info sm" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete.blog.category', $item->id) }}" class="btn btn-danger sm" id="delete" title="Delete Data">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
