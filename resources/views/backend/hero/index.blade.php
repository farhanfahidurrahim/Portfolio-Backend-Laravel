@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-header d-flex justify-content-between align-items-center shadow shadow-sm p-3 mb-2">
            <h3 class="mb-0">Hero Section</h3>
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
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($heroes as $hero)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$hero->name }}</td>
                        <td>{{$hero->designation }}</td>
                        <td>{{$hero->phone }}</td>
                        <td>{{$hero->email }}</td>
                        <td>{{$hero->status }}</td>
                        <td>
                            <img src="{{ asset($hero->image) }}" style="height: 45px; width: 45px" alt="Hero-Image">
                        </td>
                        <td>
                            <a href="{{route('hero.edit', $hero->id)}}" class="btn btn-sm btn-info"><i
                                        class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
