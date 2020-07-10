<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:40:59 GMT -->
@include('users.inc.header')

<body>

    <div id="main-wrapper">

        <!--Header section start-->
    @include('users.inc.nav')
        <!--Header section end-->

        <!-- Shop Section Start -->
        <div class="shop-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        @include('users.inc.alert')
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($categoryProducts as $categoryProduct)
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Category</h3>
                            <ul class="sidebar-list">
                                @foreach($categories as $category)
                                <li><a href="{{url('/shop/'.$category->id)}}"><i class="fa fa-angle-right"></i>{{$category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="{{asset('assets/images/banner/h4-banner-2.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-12">

                                <div class="shop-banner-title">
                                    <h2>{{$categoryProduct['category_name']}}</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
                                                    @if(count($categoryProduct['category_products']) > 0)
                                                        @foreach($categoryProduct['category_products'] as $product)
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.blade.php">
                                                                    <img src="/images/{{$product->product_image}}" alt="">
                                                                </a>
                                                                @if($product->discount != 0)
                                                                    <span class="descount-sticker">-{{$product->discount}}%</span>
                                                                @endif
                                                                <div class="product-action d-flex justify-content-between">
                                                                    <a class="product-btn" href="{{url('/addToCart/'.$product->id)}}">Add to Cart</a>
                                                                    <ul class="d-flex">
                                                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-content text-left">
                                                                <h3><a href="{{ route('productDetails', ['id' => $product->id]) }}"> {{$product->name}}</a></h3>
                                                                @if($product->discount != 0)
                                                                    <h4 class="price">
                                                                        <span class="new">€{{$product->price - ($product->price * $product->discount / 100)}}</span>
                                                                        <span class="old">€{{$product->price}}</span>
                                                                    </h4>
                                                                @else
                                                                    <h4 class="price">
                                                                        <span class="new">€{{$product->price}}</span>
                                                                    </h4>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    @endforeach
                                                    @else
                                                        <div class="panel">
                                                            <div class="panel-body">
                                                                <div class="alert alert-danger alert-block">
                                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                                    <strong>Sorry, No Product In This Category</strong>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                            <div class="col">
                                <ul class="page-pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->

        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "asNavFor": ".slider-thumbs-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }'>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-1.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-2.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-3.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-4.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".slider-lg-image-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }' data-slick-responsive= '[
                                            {"breakpoint":991, "settings": {
                                                "slidesToShow": 3
                                            }},
                                            {"breakpoint":767, "settings": {
                                                "slidesToShow": 4
                                            }},
                                            {"breakpoint":479, "settings": {
                                                "slidesToShow": 2
                                            }}
                                        ]'>										
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <!-- product detail content -->
                                    
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>White Shave Brux</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="product-add-btn" data-text="add to cart">add to cart</button>
                                                </div>
                                            </form>
                                    </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn mb-md-10 mb-sm-10">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                                    Categories: 
                                                    <a href="#">Accessories</a>,
                                                    <a href="#">Electronics</a>
                                                </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                    
                                    <!-- End of product detail content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- Modal Area End -->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')

</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:03 GMT -->
</html>