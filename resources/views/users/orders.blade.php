<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/orders.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:40:52 GMT -->
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
                            <h1>Wishlist</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Wishlist</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--Wishlist section start-->
        <div class="wishlist-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">            
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-remove">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if (count($items) == 0)
                                    <p class="alert alert-danger">No Orders.</p>
                                @else
                                    @foreach($items as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="/images/{{$item->image}}" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">{{$item->name}}</a></td>
                                        <td class="pro-price"><span>${{$item->price}}</span></td>
                                        <td class="pro-price">
                                            <span>
                                                @if($item->status == 4)
                                                        <span class="btn-warning">Pending</span>
                                                    @elseif($item->status == 3)
                                                        <span class="btn-primary">Confirmed</span>
                                                    @elseif($item->status == 2)
                                                        <span class="btn-info">Shipped</span>
                                                    @elseif($item->status == 1)
                                                        <span class="btn-success">Delivered</span>
                                                    @elseif($item->status == 0)
                                                        <span class="btn-danger">Canceled</span>
                                                    @endif
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>      
            </div>
        </div>
        <!--Wishlist section end-->


        <!--Footer section start-->
    @include('users.inc.footer')

    <!--Footer section end-->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/orders.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:40:52 GMT -->
</html>