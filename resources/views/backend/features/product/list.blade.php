@extends('backend.master')
@section('content')

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="container mt-5">
                <h2>Product List</h2>
                <a href="{{ route('product.create') }}" class="btn btn-success mb-3">Create New Product</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>brand</th>
                            <th>price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td>{{$products->id}}</td>
                            <td>
                                <img src="{{('/uploads/products/' . $products->image) }}" alt="{{ $products->name }}"
                                    style="max-width: 50px; max-height: 50px;">
                            </td>
                            <td>{{$products->name}}</td>
                            <td>{{$products->category->name}}</td>
                            <td>{{$products->brand->name}}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->status }}</td>
                            <td>
                                <a href="{{ route('product.delete', $products->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                <a href="{{ route('product.view', $products->id) }}" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection