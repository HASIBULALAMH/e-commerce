@extends('frontend.Master')
@section('content')
<main>
    <!-- Hero area Start-->
    <div class="hero-area section-bg2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-area">
                        <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                            <div class="hero-caption hero-caption2">
                                <h2>Products</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="listing-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <!-- Left sidebar filters -->
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <!-- Add your filter components here -->
                </div>

                <!--Products grid -->
                <div class="col-xl-9 col-lg-8 col-md-8">
                    <div class="latest-items latest-items2">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="{{ route('product.details', $product->id) }}">
                                                <img src="{{('/uploads/products/'.$product->image) }}" alt="{{ $product->name }}">
                                            </a>
                                            <div class="icon" style="position: absolute; top: 10px; right: 10px;">
                                                <a href="" class="add-to-cart-btn" style="display: inline-block; background: #fff; padding: 8px; border-radius: 50%; margin-right: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                                    <i class="fas fa-shopping-cart" style="color: #333; font-size: 16px;"></i>
                                                </a>
                                                <a href="" class="wishlist-btn" style="display: inline-block; background: #fff; padding: 8px; border-radius: 50%; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                                    <i class="far fa-heart" style="color: #333; font-size: 16px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a></h3>
                                            <div class="properties-footer">
                                                <div class="price">
                                                    <span>${{ $product->price }}
                                                        @if($product->original_price)
                                                        <span>{{ $product->original_price }} BDT</span>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-12">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Scroll Up -->
<div id="back-top">
    <a class="wrapper" title="Go to Top" href="#">
        <div class="arrows-container">
            <div class="arrow arrow-one">
            </div>
            <div class="arrow arrow-two">
            </div>
        </div>
    </a>
</div>
@endsection