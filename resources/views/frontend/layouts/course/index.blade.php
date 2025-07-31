@extends('frontend.app')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row">
                <!-- Filter Button for Mobile View -->
                <div class="col-12 d-lg-none mb-3">
                    <button class="btn btn-primary w-100" id="filterButton">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                </div>

                <!-- Left Side: Filter Options -->
                <div class="col-lg-3" id="filterSidebar">
                    <!-- Price Range Card -->
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Price Range</h5>
                        </div>
                        <div class="card-body">
                            <input type="range" class="form-range" min="0" max="100000" value="50000" id="priceRange">
                            <div class="price-range d-flex gap-3 mt-3">
                                <input type="number" class="form-control" style="width: 100px;" id="minPrice" value="0">
                                <input type="number" class="form-control" style="width: 100px;" id="maxPrice" value="100000">
                            </div>
                        </div>
                    </div>

                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="card shadow-sm border-0 mt-3">
                        <div class="card-header text-white">
                            <h5 class="mb-0">Availability</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="In Stock" id="inStock">
                                <label class="form-check-label" for="inStock">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Pre Order" id="preOrder">
                                <label class="form-check-label" for="preOrder">Pre Order</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input availability" type="checkbox" value="Up Coming" id="upComing">
                                <label class="form-check-label" for="upComing">Up Coming</label>
                            </div>
                        </div>
                    </div>
                    <!--Filter button -->
                    <div class="card shadow-sm border-0 mt-3">

                        <div class="card-body text-center">
                            <button class="btn btn-primary w-100">Apply Filter</button>
                        </div>
                    </div>

                </div>

                <!-- Right Side: Product Cards -->
                <div class="col-lg-9">
                    <!-- Product Cards -->
                    <div class="row mt-4" id="productCards">
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4 mb-4">
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4"mb-4>
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4"mb-4>
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4"mb-4>
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4"mb-4>
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-4"mb-4>
                            <div class="single_special_cource">
                                <img src="frontend/img/special_cource_3.png" class="special_img" alt="Course Image">
                                <div class="special_cource_text">
                                    <a href="course-details.html" class="btn_4">WordPress</a>
                                    <h4>$140.00</h4>
                                    <a href="course-details.html">
                                        <h3>WordPress Development</h3>
                                    </a>
                                    <p>Master WordPress development with hands-on projects and expert guidance.</p>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/color_star.svg" alt="Star"></a>
                                            <a href="#"><img src="frontend/img/icon/star.svg" alt="Star"></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                    <!-- Inline Buttons -->
                                    <div class="inline-buttons">
                                        <a href="{{route ('course.detail')}}" class="addcard_btn flex-grow-1">Details Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
