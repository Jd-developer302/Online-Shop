@extends('adminlayout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">Create Category</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('Admin.Category.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Category</h4>
                </div>
                <form method="POST" action="{{ route('Admin.Category.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" value="{{$category->slug}}" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" value="{{$category->image}}" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class='bx bx-save'></i> Update Category
                        </button>
                    </div>
                </form>
                {{-- <form method="POST" action="{{ route('Admin.Category.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mx-3 mb-3 mt-3">
                        <div class="col-xl-12 col-md-12">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mx-3 mb-3">
                        <div class="col-xl-12 col-md-12">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value="{{$category->slug}}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mx-3 mb-3">
                        <div class="col-xl-12 col-md-12">
                            <label for="">Image</label>
                            <input type="file" name="image" value="{{$category->image}}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mx-3 mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-md-12 mb-4 mt-4">
                            <button class="btn btn-primary mr-3" type="submit" style="float: right">Update Category</button>
                        </div>
                    </div>
                </form> --}}
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection