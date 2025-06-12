        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                            class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{route('deshboard')}}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">5</span>
                            <span> Dashboards </span>
                        </a>

                    </li>

                    <li class="side-nav-item">
                        <a href="{{route('category.list')}}" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Category </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{route('product.list')}}" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> product </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{route('brand.list')}}" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Brand</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{route('orders.list')}}" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> order list</span>
                        </a>
                    </li>













                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>