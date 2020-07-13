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
                            <h1>Shopping Cart</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--Cart section start-->
        <div class="cart-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">            
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                @include('users.inc.alert')
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if (\Darryldecode\Cart\Facades\CartFacade::isEmpty())
                                    <p class="alert alert-warning">Your shopping cart is empty.</p>
                                @else
                                    @foreach($items as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="/images/{{$item->image}}" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">{{$item->name}}</a></td>
                                        <td class="pro-price"><span>${{$item->price}}</span></td>
                                        <td class="pro-quantity"><div class="pro">{{$item->quantity}}</div></td>
                                        <td class="pro-subtotal"><span>${{$item->price * $item->quantity}}</span></td>
                                        <td class="pro-remove"><a href="{{url('/deleteItem/'.$item->id)}}"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span>${{\Darryldecode\Cart\Facades\CartFacade::getSubTotal()}}</span></p>
                                        <p>Shipping Cost <span>$00.00</span></p>
                                        <h2>Grand Total <span>${{\Darryldecode\Cart\Facades\CartFacade::getSubTotal()}}</span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <a href="{{url('/getCheckout')}}" class="btn">Checkout</a>
                                        <a href="{{url('/clearCart')}}" class="btn">Clear Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    
                </div>            
            </div>
        </div>
        <!--Cart section end-->

        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->


    </div>


    <!-- All jquery file included here -->
    @include('users.inc.scripts')

</body>


</html>