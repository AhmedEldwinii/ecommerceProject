@extends('site.layout.layout')


@section('index')
    <div class="main">
        <div class="container">
            <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
            <div class="row margin-bottom-40">
            </div>
            <!-- END SALE PRODUCT & NEW ARRIVALS -->

            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40 ">
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-8">
                    <h2>Categories</h2>
                    <div class="owl-carousel owl-carousel3">

                    @foreach ($mainCategory as $category)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="{{ asset($category->image) }}" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="{{ asset($category->image) }}"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                    </div>
                                </div>
                                <h3><a href="{{ route('product.index', $category->name)}}">{{ $category->name }}</a></h3>
                                <div class=""></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->

            <!-- BEGIN TWO PRODUCTS & PROMO -->
            <div class="row margin-bottom-35 ">
                <!-- BEGIN TWO PRODUCTS -->
                <div class="col-md-6 two-items-bottom-items">
                    <h2>FEATURED
                    </h2>
                    <div class="owl-carousel owl-carousel2">
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="{{ asset('site') }}/assets/pages/img/products/k7.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="{{ asset('site') }}/assets/pages/img/products/k7.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>

                                    </div>
                                </div>
                                <h3><a href="{{ asset('site') }}/shop-item.html">HOODIES</a></h3>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="{{ asset('site') }}/assets/pages/img/products/k8.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="{{ asset('site') }}/assets/pages/img/products/k8.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>

                                    </div>
                                </div>
                                <h3><a href="{{ asset('site') }}/shop-item.html">PULLOVERS</a></h3>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END TWO PRODUCTS -->
                <!-- BEGIN PROMO -->
                <div class="col-md-6 shop-index-carousel">
                    <div class="content-slider">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('site') }}/assets/pages/img/index-sliders/slide1.jpg"
                                        class="img-responsive" alt="Berry Lace Dress">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('site') }}/assets/pages/img/index-sliders/slide2.jpg"
                                        class="img-responsive" alt="Berry Lace Dress">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('site') }}/assets/pages/img/index-sliders/slide3.jpg"
                                        class="img-responsive" alt="Berry Lace Dress">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROMO -->
            </div>
            <!-- END TWO PRODUCTS & PROMO -->
        </div>
    </div>
@endsection




@section('slider')
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase"
                                data-animation="animated fadeInDown">
                                Tones of <br /><span class="color-red-v2">Shop UI Features</span><br /> designed
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Lorem ipsum dolor sit
                                amet constectetuer diam <br />
                                adipiscing elit euismod ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Unlimted
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                Layout Options
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Fully Responsive
                            </p>
                            <a class="carousel-btn" href="{{ asset('site') }}/#" data-animation="animated fadeInUp">See
                                More
                                Details</a>
                        </div>
                        <img class="carousel-position-five animate-delay hidden-sm hidden-xs"
                            src="{{ asset('site') }}/assets/pages/img/shop-slider/slide2/price.png" alt="Price"
                            data-animation="animated zoomIn">
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                                Full Admin &amp; Frontend
                            </span>
                            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                                eCommerce UI
                            </p>
                            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                                Is Ready For Your Project
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-seven">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                    The most <br />
                                    wanted bijouterie
                                </h2>
                                <a class="carousel-btn" href="{{ asset('site') }}/#"
                                    data-animation="animated fadeInUp">But
                                    It Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="{{ asset('site') }}/#carousel-example-generic"
                role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="{{ asset('site') }}/#carousel-example-generic"
                role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
@endsection