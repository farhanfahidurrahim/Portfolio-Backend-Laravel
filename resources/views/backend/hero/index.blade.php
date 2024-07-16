@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-header d-flex justify-content-between align-items-center shadow shadow-sm p-3 mb-2">
            <h3 class="mb-0">Hero</h3>
            <a href="{{ route('hero.create') }}" class="btn btn-sm btn-success">Add</a>
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
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Farhan Fahidur Rahim</td>
                        <td>Software Developer</td>
                        <td>01675717825</td>
                        <td>farhan.fahidurrahim@gmail.com</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Farhan Fahidur Rahim</td>
                        <td>Software Developer</td>
                        <td>01675717825</td>
                        <td>farhan.fahidurrahim@gmail.com</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Farhan Fahidur Rahim</td>
                        <td>Software Developer</td>
                        <td>01675717825</td>
                        <td>farhan.fahidurrahim@gmail.com</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
