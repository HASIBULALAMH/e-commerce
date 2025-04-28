@extends('backend.master')
@section('content')

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mb-2 mt-5">
                <div class="col-6 bg-primary">

                    <img src="#" alt="">

                </div>

                <div class="col-6 bg-warning" style="height: 100px;">

                    <h1>{{$product->name}}</h1>
                    <p>{{$product->description}}</p>
                    <h4>{{$product->price}}</h4>

                </div>
            </div>


        </div>
    </div>
</div>

@endsection