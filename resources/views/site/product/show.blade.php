@extends('site.layout.layout')

@section('index')

<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="">Store</a></li>
          <li class="active">Cool green dress with red bell</li>
      </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
          <div class="product-page">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="product-main-image">
                  <img src="{{ asset($product->image) }}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="assets/pages/img/products/model7.jpg">
                </div>
                {{-- <div class="product-other-images">
                  <a href="{{ asset('site') }}/assets/pages/img/products/model3.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="{{ asset('site') }}/assets/pages/img/products/model3.jpg"></a>
                  <a href="{{ asset('site') }}/assets/pages/img/products/model4.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="{{ asset('site') }}/assets/pages/img/products/model4.jpg"></a>
                  <a href="{{ asset('site') }}/assets/pages/img/products/model5.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="{{ asset('site') }}/assets/pages/img/products/model5.jpg"></a>
                </div> --}}
              </div>
              <div class="col-md-6 col-sm-6">
                <h1>{{ $product->name }}</h1>
                <div class="price-availability-block clearfix">
                  <div class="price">
                    <strong><span>$</span>{{ $product->discount_price }}</strong>
                    <em>$<span>{{ $product->price }}</span></em>
                  </div>
                  <div class="availability">
                    Availability: <strong>In Stock : {{ $product->quantity }}  </strong>
                  </div>
                </div>
                <div class="description">
                  <p> {{ $product->descreption }}Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
Nostrud duis molestie at dolore.</p>
                </div>
                <div class="product-page-options">
                  <div class="pull-left">
                    <label class="control-label">Size:</label>
                    <select class="form-control input-sm">
                      <option>L</option>
                      <option>M</option>
                      <option>XL</option>
                    </select>
                  </div>
                  <div class="pull-left">
                    <label class="control-label">Color:</label>
                    <select class="form-control input-sm">

                        @foreach($colors as $color)
                            <option>{{ $color->color }}</option>
                        @endforeach

                    </select>
                  </div>
                </div>
                <div class="product-page-cart">
                  <div class="product-quantity">
                      <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                  </div>
                  <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('addtocart').submit();">Add to cart
                    <form action="{{ route('cart.store') }}" id="addtocart" method="POST">
                    @csrf
                    <input type='hidden' name="id" value="{{ $product->id }}">
                    <input type='hidden' name="quantity" id="qty" value="1" >
                  </form>
                  </button>
                </div>
                <div class="review">
                  <input type="range" value="4" step="0.25" id="backing4">
                  <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                  </div>
                  <a href="javascript:;">7 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a>
                </div>
                <ul class="social-icons">
                  <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                  <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                  <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                  <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                  <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                </ul>
              </div>



              <div class="sticker sticker-sale"></div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->


    </div>
  </div>
<br>
<br>
@stack('scripts')

@endsection


