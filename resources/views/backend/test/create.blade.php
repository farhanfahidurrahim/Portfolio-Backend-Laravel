@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-header d-flex justify-content-between align-items-center shadow shadow-sm p-3 mb-5">
            <h3 class="mb-0">Hero</h3>
            <a href="{{ route('test.create') }}" class="btn btn-sm btn-success">Add New</a>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="" method="post">
                    <div class="row shadow p-3 rounded">
                        <div class="form-group col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Designation<span class="text-danger">*</span></label>
                                <input type="text" name="designation" value="{{ old('designation') }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Phone<span class="text-danger">*</span></label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group  col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Preview<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
