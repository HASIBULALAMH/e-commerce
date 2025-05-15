@extends('frontend.master')
@section('content')

<html>

<head>
    <title>SpaceSaver Furnishings - Marketing Page</title>
    <link href="https://cdn.tailwindcss.com/3.4.1/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: Avenir, Montserrat, Corbel, 'URW Gothic', source-sans-pro, sans-serif;
            font-weight: normal;
        }

        a {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-semibold mb-8">{{ $mybrand->first()->brand->name }} Products</h1>

        @php
            $categorizedProducts = $mybrand->groupBy('category.name');
        @endphp

        @foreach($categorizedProducts as $categoryName => $products)
        <div class="mb-12">
            <!-- Category Card -->
            <div class="bg-white p-6 shadow-md mb-6">
                <h2 class="text-2xl font-semibold">{{ $categoryName }}</h2>
            </div>

            <!-- Products Grid for this Category -->
            <div class="grid grid-cols-3 md:grid-cols-9 gap-6">
                @foreach($products as $product)
                <div class="bg-white p-4 shadow-md">
                    <div class="aspect-square w-full mb-4">
                        <img src="{{('/uploads/products/'.$product->image) }}" 
                             alt="{{ $product->name }}" 
                             class="object-cover w-full h-full">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                    <p class="text-blue-600 font-semibold mb-4">BDT{{ $product->price }}</p>
                    <a href="{{route('product.details',$product->id)}}" class="text-blue-500 hover:underline">View Details</a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>


@endsection

<!-- <table class="table">
    <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>

        </tr>
    </thead>
    <tbody>
        @foreach($mybrand as $brands)
        <tr>
            <td>{{$brands->name}}</td>
            <td>{{$brands->category->name}}</td>
            <td>{{$brands->brand->name}}</td>
            <td>₹{{$brands->price}}</td>
            <td>
                <img src="{{asset($brands->image)}}" alt="{{$brands->name}}" style="width: 100px;">
            </td>

        </tr>
        @endforeach
    </tbody>

</table> -->