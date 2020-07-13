<!doctype html>
<html class="no-js" lang="zxx">


@include('users.inc.header')

<body>

    <div id="main-wrapper">

        <!--Header section start-->
    @include('users.inc.nav')
        <!--Header section end-->

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="page-banner text-center">
                            <h1>Blog Details</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Blog Section Start -->
        <div class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-50 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Blog Posts</h3>
                            <ul class="sidebar-list">
                                @foreach($blogs as $b)
                                <li><a href="{{url('blog_details/'.$b->id)}}"><i class="fa fa-angle-right"></i>{{$b->title}}</a></li>
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
                    <div class="col-lg-9 mb-sm-40 mb-xs-30">
                        <div class="blog_area">
                            <article class="blog_single blog-details">
                                <header class="entry-header">
                                    <span class="post-category">
                                        <a href="#"> {{$blog->category}}</a>
                                    </span>
                                    <h2 class="entry-title">
                                        {{$blog->title}}
                                    </h2>
                                    <span class="post-author">
                                    <span class="post-by"> Posts by : </span> Admin </span>
                                    <span class="post-separator">|</span>
                                    <span class="post-date"><i class="fas fa-calendar-alt"></i>{{$blog->created_at->diffForHumans()}} </span>
                                </header>
                                <div class="post-thumbnail img-full">
                                    <img src="/images/{{$blog->img}}" alt="">
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-info">
                                        <div class="entry-summary blog-post-description">
                                           {!! nl2br(e($blog->content)) !!}
                                            <!--Blog Post Tag-->
                                            <div class="single-post-tag">
                                                <a href="#">3 comments</a>
                                                Tags: 
                                                <a href="#">fashion</a>,
                                                <a href="#">t-shirt</a>,
                                                <a href="#">white</a>,
                                            </div>
                                            <!--Blog Post Tag-->
                                            <div class="social-sharing">
                                                <div class="widget widget_socialsharing_widget">
                                                    <h3 class="widget-title">Share this post</h3>
                                                    <ul class="blog-social-icons">
                                                        <li>
                                                            <a target="_blank" title="Facebook" href="#" class="facebook social-icon">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="twitter" href="#" class="twitter social-icon">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="pinterest" href="#" class="pinterest social-icon">
                                                                <i class="fa fa-pinterest"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="linkedin" href="#" class="linkedin social-icon">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="relatedposts">
                                <h3>Related posts</h3>
                                <div class="row">
                                    @if(empty($relatedPosts))
                                        <p class="alert alert-danger">Sorry, No Related Posts</p>
                                    @else
                                        @foreach($relatedPosts as $post)
                                            <div class="col-md-4 col-sm-6">
                                                <div class="relatedthumb mb-xs-30">
                                                    <div class="image">
                                                        <a href="#"><img src="/images/{{$post->img}}" alt=""></a>
                                                    </div>
                                                    <h4><a href="#">{{$post->title}}</a></h4>
                                                    <span class="rl-post-date">{{$post->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                        </div>
                        <!--Comment Area Start-->
                        <div class="comments-area mt-85 mt-lg-65 mt-md-55 mt-md-45 mt-sm-15 mt-xs-0">
                            <h3>3 comments</h3>
                            <ol class="commentlist">
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-avatar img-full">
                                            <img src="assets/images/icons/author.png" alt="">
                                        </div>
                                        <div class="comment-info">
                                            <a href="#">admin</a>
                                            <div class="reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <span class="date">October 6, 2014 at 1:38 am</span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar img-full">
                                                    <img src="assets/images/icons/author.png" alt="">
                                                </div>
                                                <div class="comment-info">
                                                    <a href="#">admin</a>
                                                    <div class="reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <span class="date">October 6, 2014 at 1:38 am</span>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <ol class="commentlist">
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-avatar img-full">
                                            <img src="assets/images/icons/author.png" alt="">
                                        </div>
                                        <div class="comment-info">
                                            <a href="#">admin</a>
                                            <div class="reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <span class="date">October 6, 2014 at 1:38 am</span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="comment-box mt-30">
                            <h3>Leave a Comment</h3>
                            <form action="#">
                                <p class="comment-note"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-input mb-20">
                                            <label>Comment*</label>
                                            <textarea name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input mb-20">
                                            <label>Name*</label>
                                            <input name="commenter-name" id="commenter-name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input mb-20">
                                            <label>Email*</label>
                                            <input name="commenter-email" id="commenter-email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-input mb-20">
                                            <label>Website*</label>
                                            <input name="commenter-url" id="commenter-url" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <button class="form-button" type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--Comment Area End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!--Brand section start-->
        <div
            class="brand-section section border-top pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <!--Brand Slider start-->
                    <div class="tf-element-carousel section" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "autoplay": true
                        }'  data-slick-responsive='[
                        {"breakpoint":1199, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-1.png" alt=""></a></div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-2.png" alt=""></a></div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-3.png" alt=""></a></div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-4.png" alt=""></a></div>
                        <div class="brand col"><a href="#"><img src="assets/images/brands/brand-5.png" alt=""></a></div>
                    </div>
                    <!--Brand Slider end-->

                </div>
            </div>
        </div>
        <!--Brand section end-->

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


    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


</html>