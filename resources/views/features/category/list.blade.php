@extends('master')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{url('/category_create')}}" class="btn btn-primary float-end">
                        <i class="fas fa-plus"></i> Add New Category
                    </a>
                </div>
            </div>
            <div class="container mt-5">
                <h2 class="mb-4">Category List</h2>
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Category Description</th>
                                <th scope="col">image</th>
                                <th scope="col">Display Order</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cat as $cats)
                            <tr>
                                <th scope="row">{{$cats->id}}</th>
                                <td>{{$cats->name}}</td>
                                <td>{{$cats->description}}</td>
                                <td>{{$cats->image}}</td>
                                <td>{{$cats->display_order}}</td>
                                <td>{{$cats->status}}</td>
                                <td>
                                    <a class="btn btn-warning" href="">edit</a>
                                    <a class="btn btn-danger" href="">delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection