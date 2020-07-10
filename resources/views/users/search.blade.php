<!doctype html>
<html class="no-js" lang="zxx">


@include('users.inc.header')


<body>

    <div id="main-wrapper">

        <!--Header section start-->
    @include('users.inc.nav')
        <!--Header section end-->

        <!-- Shop Section Start -->
        <div class="shop-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-banner-title">
                                    <h2>Search Results</h2>
                                </div>
                                @include('users.inc.alert')

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
                                                    @if(count($searchs) > 0)
                                                    @foreach($searchs as $product)
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    @else
                                                        <div class="panel">
                                                            <div class="panel-body">
                                                                <div class="alert alert-danger alert-block">
                                                                    {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                                                                    <strong>Sorry, No Product Related To Your Search</strong>
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
                        <div class="row mb-30 mb-sm-0 mb-xs-0">
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
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->


    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    @include('users.inc.scripts')


</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/search.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:03 GMT -->
</html>