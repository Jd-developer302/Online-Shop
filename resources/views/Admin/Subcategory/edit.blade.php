@extends('adminlayout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">Edit Subcategory</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('Admin.Subcategory.index') }}" class="btn btn-primary">Back</a>
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
                    <h4 class="box-title">Edit Subcategory</h4>
                </div>
                <!-- /.box-header -->
                <form action="{{ route('Admin.Subcategory.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Add this line for update method -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ $subcategory->slug }}" placeholder="Slug">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="active" {{ $subcategory->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $subcategory->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class='bx bx-save'></i> Update Subcategory
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
