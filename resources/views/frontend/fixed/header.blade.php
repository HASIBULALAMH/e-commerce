<header>
    <div class="header-area">
        <!-- Top Header -->
        <div class="header-top d-none d-sm-block" style="border-bottom: 1px solid #eee; padding: 10px 0; font-size: 14px;">
            <!-- Previous top header content remains the same until the main menu -->

            <!-- Main Header -->
            <div class="header-mid header-sticky bg-white py-3">
                <div class="container">
                    <div class="menu-wrapper d-flex justify-content-between align-items-center">
                        <!-- Logo section remains the same -->
                        <div class="logo">
                            <a href="{{route('Home')}}">
                                <img src="https://preview.colorlib.com/theme/capitalshop/assets/img/logo/logo.png.webp" alt="Logo" class="img-fluid" style="max-height: 50px;">
                            </a>
                        </div>

                        <!-- Main Menu with inline hover effects -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation" class="list-unstyled d-flex m-0">
                                    <li class="nav-item"><a href="{{route('Home')}}" class="nav-link px-3" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">Home</a></li>
                                    <li class="nav-item"><a href="{{route('customer.brand')}}" class="nav-link px-3" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">Brand</a></li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('product.listview')}}" class="nav-link px-3 dropdown-toggle" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">Products</a>
                                        <!-- Dropdown menu remains the same -->
                                    </li>
                                    <li class="nav-item"><a href="{{route('cart.view')}}" class="nav-link px-3" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">cart</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Header Right with inline hover effects -->
                        <div class="header-right">
                            <ul class="list-unstyled d-flex align-items-center m-0">
                                <li class="nav-item me-4">
                                    <a href="javascript:void(0)" class="nav-link" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item me-4">
                                    <a href="" class="nav-link" style="color: #333; font-weight: 500; transition: color 0.3s ease;" onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                        @if(Session::has('cart'))
                                        {{count(Session::get('cart')) }} items
                                        @else
                                        0 items
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('customer.register')}}" class="nav-link" 
                                        style="color: #333; font-weight: 500; transition: color 0.3s ease; padding: 8px 15px;"
                                        onmouseenter="this.style.color='#ff2020'" onmouseleave="this.style.color='#333'">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rest of the code remains the same -->