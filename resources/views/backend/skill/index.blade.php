@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-header d-flex justify-content-between align-items-center shadow shadow-sm p-3 mb-2">
            <h3 class="mb-0"> # Section</h3>
            <a href="" class="btn btn-sm btn-success">Add</a>
        </div>
        <div class="table-responsive mt-4 item-list">
            <table class="table table-bordered table-sm table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
