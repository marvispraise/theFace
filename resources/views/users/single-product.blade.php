<!doctype html>
<html class="no-js" lang="zxx">


@include('users.inc.header')


<body>

    <div id="main-wrapper">

        <!--Header section start-->
        @include('users.inc.nav')
        <!--Header section end-->

        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('users.inc.alert')
                    </div>


                    <div class="col-md-5">
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
                                    <img src="/images/{{$product->product_image}}" alt="">
                                    <a href="/images/{{$product->product_image}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Product Details Left -->
		            </div>
		            <div class="col-md-7">
                        <!--Product Details Content Start-->
		                <div class="product-details-content">
                            <!--Product Nav Start-->
                            <!--Product Nav End-->
		                    <h2>{{$product->name}}</h2>
                            <div class="single-product-price">
                                @if($product->discount != 0)
                                <span class="price new-price">${{$product->price - ($product->price * $product->discount / 100)}}</span>
                                <span class="regular-price">${{$product->price}}</span>
                                @else
                                    <span class="price new-price">${{$product->price}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="#">

                                    <div class="add-to-link">
                                        <a href="{{url('/addToCart/'.$product->id)}}" class="product-add-btn" data-text="add to cart">add to cart</a>
                                    </div>
                                </form>
                           </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                        Categories: 
		                                <a href="#">{{$product->category->category_name}}</a>
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
		            </div>
		        </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->

        </div>
        <!--Product Description Review Section Start-->

        <!--Product section start-->
        <div
            class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
                    @foreach($relatedProducts as $product)

                        <div class="col-lg-3">
                            <!-- Single Product Start -->
                            <div class="single-product mb-30">
                                <div class="product-img">
                                    <a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                        <img src="/images/{{$product->product_image}}" alt="">
                                    </a>
                                    @if($product->discount != 0)
                                        <span class="descount-sticker">-{{$product->discount}}%</span>
                                    @endif
                                    <div class="product-action d-flex justify-content-between">
                                        <a class="product-btn" href="{{url('/addToCart/'.$product->id)}}">Add to Cart</a>
                                        <ul class="d-flex">
                                            <li><a href="/images/{{$product->product_image}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <h3><a href="single-product.blade.php"> {{$product->name}}</a></h3>
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
                </div>
            </div>
        </div>
        <!--Product section end-->

        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->


    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/single-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:04 GMT -->
</html>