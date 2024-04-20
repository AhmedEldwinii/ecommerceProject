@extends('site.layout.layout')

@section('index')
    <div class="title-wrapper">
        <div class="container">
            <div class="container-inner">
                <h1><span>{{ $category->name }}</span> CATEGORY</h1>
                <em>Over 4000 Items are available here</em>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Store</a></li>
                <li class="active">Men category</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-5">
                    <ul class="list-group margin-bottom-25 sidebar-menu">

                        <li class="list-group-item clearfix dropdown active">
                            <a href="javascript:void(0);" class="collapsed">
                                <i class="fa fa-angle-right"></i>
                                Mens

                            </a>
                            <ul class="dropdown-menu" style="display:block;">
                                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> HOODIES</a></li>
                                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> PULLOVERS</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item clearfix"><a href="shop-product-list.html"><i
                                    class="fa fa-angle-right"></i> Kids</a></li>
                        <li class="list-group-item clearfix"><a href="shop-product-list.html"><i
                                    class="fa fa-angle-right"></i> SHOES</a></li>

                    </ul>

                    <div class="sidebar-filter margin-bottom-25">
                        <h2>Filter</h2>
                        <h3>Availability</h3>
                        <div class="checkbox-list">
                            <label><input type="checkbox"> Not Available (3)</label>
                            <label><input type="checkbox"> In Stock (26)</label>
                        </div>

                        <h3>Price</h3>
                        <p>
                            <label for="amount">Range:</label>
                            <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                    </div>

                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">
                    <div class="row list-view-sorting clearfix">
                        <div class="col-md-2 col-sm-2 list-view">
                            <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                            <a href="javascript:;"><i class="fa fa-th-list"></i></a>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="pull-right">
                                <label class="control-label">Show:</label>
                                <select class="form-control input-sm">
                                    <option value="#?limit=24" selected="selected">24</option>
                                    <option value="#?limit=25">25</option>
                                    <option value="#?limit=50">50</option>
                                    <option value="#?limit=75">75</option>
                                    <option value="#?limit=100">100</option>
                                </select>
                            </div>
                            <div class="pull-right">
                                <label class="control-label">Sort&nbsp;By:</label>
                                <select class="form-control input-sm">
                                    <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                    <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <!-- BEGIN PRODUCT LIST -->
                    <div class="row product-list">
                        <!-- PRODUCT ITEM START -->


                        @foreach ($products as $product)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="{{ asset($product->image) }}" class="img-responsive"
                                            alt="Berry Lace Dress">
                                        <div>
                                            <a href="{{ asset($product->image) }}"
                                                class="btn btn-default fancybox-button">Zoom</a>
                                            <a href="{{ route('product.show', $product->id)}}" class="btn btn-default fancybox-fast-view">View</a>
                                        </div>
                                    </div>
                                    <h3><a href="{{ route('product.show', $product->id)}}"> {{ $product->name }}</a></h3>
                                    <div class="pi-price">{{ $product->price }}</div>
                                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                </div>
                            </div>
                        @endforeach


                        <!-- PRODUCT ITEM END -->
                    </div>
                    <!-- END PRODUCT LIST -->
                    <!-- BEGIN PAGINATOR -->
                    <div class="row">
                        <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
                        <div class="col-md-8 col-sm-8">
                            <ul class="pagination pull-right">
                                <li><a href="javascript:;">&laquo;</a></li>
                                <li><a href="javascript:;">1</a></li>
                                <li><span>2</span></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li><a href="javascript:;">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END PAGINATOR -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
@endsection
