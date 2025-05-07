<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <title>Watch Brands</title>
    <style>
        .brand-slider img {
            width: 150px;
            height: 70px;
            transition: 0.4s;
            padding: 0 7px;
        }

        .brand-slider img:hover {
            opacity: 0.7;
            transform: scale(1.05);
        }

        .slick-prev:before, .slick-next:before {
            color: #04776e;
        }

        @media (max-width: 768px) {
            .brand-slider img {
                width: 100px;
                height: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <!-- Header Section -->
        <header class="text-center mb-5">
            <h1 class="display-4">Watch Brands List</h1>
            <h2 class="h4 mb-4"><i>A-Z</i></h2>
            <button class="btn btn-dark" onclick="window.location.href = '#';">
                View Full Logo List
            </button>
        </header>

        <!-- Popular Brands Section -->
        <section class="mb-5">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3 class="h5">Our Most Popular Brands</h3>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find a brand">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Brands Slider -->
            <div class="brand-slider">
                @foreach($brand as $brands)
                <div class="px-2">
                    <a href="{{ route('customer.brands', $brands->id) }}" class="text-decoration-none">
                        <img src="{{ '/uploads/brands/'.$brands->logo }}" 
                             alt="{{ $brands->name }}"
                             class="img-fluid">
                        <p class="text-center mt-2 text-dark">{{$brands->name}}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script>
        $('.brand-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false
                    }
                }
            ]
        });
    </script>
</body>
</html>
