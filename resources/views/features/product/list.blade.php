@extends('master')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{route('product_create')}}" class="btn btn-primary float-end">
                        <i class="fas fa-plus"></i> Add New Category
                    </a>
                </div>
            </div>
            <div class="table-container" style="margin-top: 20px;">
                <h2 style="text-align: center;">Product List</h2>
                <input type="text" id="search" placeholder="Search products..." onkeyup="searchTable()"
                    style="margin-bottom: 10px; padding: 5px; width: 100%;">
                <table id="productTable" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                ID 🔽</th>
                            <th onclick="sortTable(1)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                Name 🔽</th>
                            <th onclick="sortTable(2)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                Category 🔽</th>
                            <th onclick="sortTable(3)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                Price 🔽</th>
                            <th onclick="sortTable(4)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                Stock 🔽</th>
                            <th onclick="sortTable(4)" style="cursor: pointer; padding: 10px; border: 1px solid #ddd;">
                                image 🔽</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$products->id}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$products->name}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$products->category}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $products->price }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$products->stock}}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{$products->image}}</td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <a href="#" class="btn btn-warning">edit</a>
                                <a href="{{route('product_delete',$products->id)}}" class="btn btn-danger">delete</a>
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