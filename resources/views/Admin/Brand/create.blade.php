@extends('adminlayout.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">Create Brand</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('Admin.Brand.index') }}" class="btn btn-primary">Back</a>
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
                    <h4 class="box-title">Create Brand</h4>
                </div>
                <!-- /.box-header -->
                <form action="{{ route('Admin.Brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Slug">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class='bx bx-save'></i> Save Brand
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