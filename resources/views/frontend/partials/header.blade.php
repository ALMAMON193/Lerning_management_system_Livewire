<header class="main_menu home_menu">
    <div class="container2" style="background: #089CC2">
        <ul class="navbar-nav2 d-flex flex-row  flex-wrap">
            <li class="nav-item2"><a class="nav-link" href="student.html">Students</a></li>
            <li class="nav-item2"><a class="nav-link" href="teacher.html">Teacher & Mentor</a></li>
            <li class="nav-item2"><a class="nav-link" href="#">News</a></li>
            <li class="nav-item2"><a class="nav-link" href="#">Notice</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route ('course')}}">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                        <!-- Search Form -->
                        <form class="form-inline my-2 my-lg-0 ml-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn_login my-2 my-sm-0" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>

                        <ul class="navbar-nav align-items-center ml-3">
                            <a class="btn_card" href="#">
                                <i class="fas fa-cart-plus"></i>
                                <span class="cart-count">3</span>
                            </a>
                            <li>
                                <a class="btn_login" href="{{route ('admin.dashboard')}}">Login</a>
                            </li>
                            <li>
                                <a class="btn_1" href="#">Sign Up</a>
                            </li>
                            <li>
                                <a class="btn_translate" href="#">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
