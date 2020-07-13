<!doctype html>
<html class="no-js" lang="zxx">


@include('users.inc.header')

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        @include('users.inc.nav')
        <!--Header section end-->

        <!--slider section start-->
        <div class="hero-section section position-relative">

            <div class="tf-element-carousel slider-nav" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": true
        }' data-slick-responsive='[
        {"breakpoint":768, "settings": {
        "slidesToShow": 1
        }},
        {"breakpoint":575, "settings": {
        "slidesToShow": 1,
        "arrows": false,
        "autoplay": true
        }}
        ]'>
                <!--Hero Item start-->
                @foreach($index_banners as $index_banner)
                <div class="hero-item bg-image" data-bg="/images/{{$index_banner->image}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <!--Hero Content start-->
                                <div class="hero-content-3">

                                    <h2>{{$index_banner->text1}}</h2>
                                    <h1>{{$index_banner->text2}}</h1>
                                    <h3>{{$index_banner->text3}}</h3>
                                    <a href="#">Shop collection now!</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Hero Item end-->
            </div>

        </div>
        <!--slider section end-->

        <!--Product section start-->
        <div
            class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-50 pt-xs-40 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                @include('users.inc.alert')

                <div class="row">

                    <div class="col-lg-3 col-xl-2">
                        <!-- Section Title Start -->
                        <div class="section-title-two mb-40 mb-xs-20">
                            <span>our</span>
                            <h2>Featured</h2>
                            <span>proucts</span>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-9 col-xl-10">
                        <div class="row tf-element-carousel product-nav-two" data-slick-options='{
                            "slidesToShow": 5,
                            "slidesToScroll": 1,
                            "infinite": true,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                            }' data-slick-responsive='[
                            {"breakpoint":1899, "settings": {
                            "slidesToShow": 4
                            }},
                            {"breakpoint":1400, "settings": {
                            "slidesToShow": 3
                            }},
                            {"breakpoint":1199, "settings": {
                            "slidesToShow": 2
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
                            "slidesToShow": 1
                            }}
                            ]'>
                            @foreach($fProducts as $fProduct)
                            @foreach($fProduct['products'] as $p)

                                <div class="col-lg-3">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="{{ route('productDetails', ['id' => $p->id]) }}">
                                                <img src="/images/{{$p->product_image}}" alt="">
                                            </a>
                                            @if($p->discount != 0)
                                                <span class="descount-sticker">-{{$p->discount}}%</span>
                                            @endif
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="{{url('/addToCart/'.$p->id)}}">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="{{ route('productDetails', ['id' => $p->id]) }}" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a href="single-product.blade.php"> {{$p->name}}</a></h3>
                                            @if($p->discount != 0)
                                            <h4 class="price">
                                                <span class="new">${{$p->price - ($p->price * $p->discount / 100)}}</span>
                                                <span class="old">${{$p->price}}</span>
                                            </h4>
                                            @else
                                                <h4 class="price">
                                                    <span class="new">€{{$p->price}}</span>
                                                </h4>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end-->

        <!--Deal Of Product section start-->
        <div
            class="deal-product-section section bg-gray-two pt-0 pt-sm-5 pb-20 pb-sm-0 pb-xs-25">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf-element-carousel" data-slick-options='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                        }' data-slick-responsive='[
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }}
                        ]'>
                        @if(count($hotDeals) > 0)

                            <!-- Single Deal Product Start -->
                            @foreach($hotDeals as $hotDeal)
                            @foreach($hotDeal['products'] as $deal)
                            <div class="single-deal-product">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="{{ route('productDetails', ['id' => $deal->id]) }}">
                                                <img src="/images/{{$deal->product_image}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-title">
                                            <h2><span>Hot</span><span>Deal</span></h2>
                                            <p>These products are up for grabs. Get before the countdown ends....</p>
                                            <div class="cs-countdown black-color">
                                                {{--<div class="pro-countdown" data-countdown="{{$hotDeal['date']->format('Y/m/d') }}"></div>--}}
                                                <div class="pro-countdown" data-countdown="{{date("Y/m/d", $hotDeal['date'])}}"></div>

                                            </div>
                                            <a href="{{ route('productDetails', ['id' => $deal->id]) }}">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                            <!-- Single Deal Product End -->

                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Deal Of Product section end-->

        <!--Product section start-->
        <div
            class="product-section section pt-100 pt-lg-70 pt-md-65 pt-sm-60 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                <div class="row">

                    <div class="col-xl-2 col-lg-3">
                        <!-- Section Title Start -->
                        <div class="section-title-two mb-40 mb-xs-20">
                            <span>our</span>
                            <h2>Best seller</h2>
                            <span>proucts</span>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-xl-10 col-lg-9">
                        <div class="row tf-element-carousel product-nav-two" data-slick-options='{
                            "slidesToShow": 5,
                            "slidesToScroll": 1,
                            "infinite": true,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                            }' data-slick-responsive='[
                            {"breakpoint":1899, "settings": {
                            "slidesToShow": 4
                            }},
                            {"breakpoint":1400, "settings": {
                            "slidesToShow": 3
                            }},
                            {"breakpoint":1199, "settings": {
                            "slidesToShow": 2
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
                            @foreach($bestSellers as $bestSeller)
                                @foreach($bestSeller['bSellers'] as $product)

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
                                                        <li><a href="{{ route('productDetails', ['id' => $product->id]) }}" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>

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
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end-->

        <!-- Banner Section Start -->
        @foreach($banners as $banner)
        <div
            class="banner-section section bg-image pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-95 pb-lg-75 pb-md-65 pb-sm-55 pb-xs-45" data-bg="/images/{{$banner->image}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content">

                            <h2>{{$banner->title}}</h2>
                            <h1>{{$banner->subtitle}}</h1>
                            <h3>{{$banner->description}}</h3>
                            <a href="shop.blade.php">Shop collection now!</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Banner Section End -->

        <!--Call To Action section start-->
        <div class="cta-section section bg-image pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-40"
            data-bg="assets/images/bg/cta-bg.jpg">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="cta-content">
                            <h3>Get <span>10%</span> Discount</h3>
                            <p><span>Subcribe to the TheFace mailing list to receive update on new arrivals,</span>
                                <span>special offers and other discount information.</span></p>
                            <div class="cta-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-success d-none" id="msg_div">
                                            <span id="res_message"></span>
                                        </div>
                                    </div>
                                </div>
                                <form id="post-form" class="" action="javascript:void(0)" method="post">
                                    @csrf
                                    <input id="email" name="email" type="email" autocomplete="off"
                                        placeholder="Your email address here" />
                                    <button type="submit" id="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Call To Action section end-->

        <!--Blog section start-->
        <div
            class="blog-section section bg-gray pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-75 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-30">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>From the blog</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="row tf-element-carousel" data-slick-options='{
                    "slidesToShow": 3,
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
                    {"breakpoint":575, "settings": {
                    "slidesToShow": 1,
                    "arrows": false,
                    "autoplay": true
                    }}
                    ]'>
                    @foreach($blogs as $blog)
                    <!-- Single Blog Start -->
                    <div class="blog col">
                        <div class="blog-inner">
                            <div class="media"><a href="{{url('blog_details/'.$blog->id)}}" class="image"><img src="/images/{{$blog->img}}" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="#">{{$blog->title}}</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span class="date">{{$blog->created_at->diffForHumans()}}</span></span></li>
                                </ul>
                                <p>{{\Illuminate\Support\Str::limit($blog->content, 100, '.......')}} </p>
                                <a class="readmore" href="{{url('blog_details/'.$blog->id)}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    @endforeach
                </div>
            </div>
        </div>
        <!--Blog section end-->

        <!--Footer section start-->
        @include('users.inc.footer')
        <!--Footer section end-->


    </div>


    <!-- All jquery file included here -->
    @include('users.inc.scripts')
    <script type="text/javascript">

        $('#post-form').on('submit',function(event){
            event.preventDefault();
            email = $('#email').val();
            $.ajax({
                url: "/subscribe",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    email:email,
                },
                success:function(response){
                    alert(JSON.stringify(response['success']));
                },
            });
        });
    </script>
</body>


</html>