@extends('adminlayout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">View Categories</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('Admin.Category.create') }}" class="btn btn-primary">+new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Categories</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            @if($category->image)
                                                <img src="{{ asset('uploads/category/' . $category->image) }}" alt="{{ $category->name }}" style="max-width: 50px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $category->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('Admin.Category.edit', ['id' => $category->id]) }}">
                                                <i class='bx bx-edit-alt'></i>
                                            </a>
                                            <a href="{{ route('Admin.Category.destroy', ['id' => $category->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">
                                                <i class='bx bx-trash-alt'></i>
                                            </a>
                                            
                                            <form id="delete-form-{{ $category->id }}" action="{{ route('Admin.Category.destroy', ['id' => $category->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->     
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection