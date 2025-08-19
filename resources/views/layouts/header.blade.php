<!-- HEADER MENU START -->
    <header class="header">
        <div class="container">
            <nav class="navigation d-flex align-items-center justify-content-between">
                <a href="#" class="d-flex align-items-center">
                    <img src="{{asset('assets/media/brands/chanalogo.png')}}" alt="/logo" class="header-logo" style="width: auto; height: 40px;">
                </a>
                <div class="menu-button-right">
                    <div class="main-menu__nav">
                        <ul class="main-menu__list">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Sobre</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Carros</a>
                            </li>
                             <li class="dropdown">
                                <a href="javascript:void(0);">FAQ</a>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="javascript:void(0);">Rental</a>
                                <ul>
                                    <li><a href="rental.html">Rental</a></li>
                                    <li><a href="rental-sidebar.html">Rental sidebar</a></li>
                                    <li><a href="vehicle-details.html">Vehicle details</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="javascript:void(0);">Booking</a>
                                <ul>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="book-now.html">Book-now</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="javascript:void(0);">Blogs</a>
                                <ul>
                                    <li><a href="blogs.html">Blogs</a></li>
                                    <li><a href="blogs-details.html">Blogs details</a></li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="main-menu__right">
                    <div class="search-heart-icon d-md-flex d-none align-items-center gap-24">
                       @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">
    </div>
            @else
                <a class="fs-6 bg-primary text-white px-3 py-2 rounded fw-bold" href="#">Log in</a>

                    <a class="fs-6 border px-3 py-2 rounded fw-bold" href="#">Register</a>
                
            @endauth
                    </div>
                        <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                            <i class="fa-light fa-bars">rrrr</i>
                        </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER MENU END -->
