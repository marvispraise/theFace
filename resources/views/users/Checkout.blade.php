<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/checkout.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:03 GMT -->
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
                            <h1>Checkout</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--Checkout section start-->
        <div class="checkout-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">    
                            
                        <!-- Checkout Form Start-->
                        <form method="post" action="{{route('checkout')}}" class="checkout-form">
                            @csrf
                        <div class="row row-40">

                            <div class="col-lg-7">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-10">
                                    <h4 class="checkout-title">Billing Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name" name="first_name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name" name="last_name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number" name="telephone">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address" name="address">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <input type="text" placeholder="Country" name="country">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City" name="city">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State" name="state">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code / Postal Code*</label>
                                            <input type="text" placeholder="Zip Code" name="zip_code">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                                @if (\Darryldecode\Cart\Facades\CartFacade::isEmpty())
                                                    <p class="alert alert-warning">Your shopping cart is empty.</p>
                                                @else

                                                    @foreach($items as $item)
                                                        <li>{{$item->name}} X {{$item->quantity}} <span>${{$item->price * $item->quantity}}</span></li>

                                                    @endforeach
                                                @endif
                                            </ul>

                                            <p>Sub Total <span>${{\Darryldecode\Cart\Facades\CartFacade::getSubTotal()}}</span></p>

                                            <h4>Grand Total <span>${{\Darryldecode\Cart\Facades\CartFacade::getSubTotal()}}</span></h4>

                                        </div>

                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12 mb-30">

                                        <h4 class="checkout-title">Payment Method</h4>

                                        <div class="checkout-payment-method">

                                            <div class="single-method">
                                                <input type="radio" id="payment_check" name="payment-method" value="check">
                                                <label for="payment_check">Check Payment</label>
                                                <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                                <label for="payment_bank">Direct Bank Transfer</label>
                                                <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                                <label for="payment_cash">Cash on Delivery</label>
                                                <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                                <label for="payment_paypal">Paypal</label>
                                                <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                                <label for="payment_payoneer">Payoneer</label>
                                                <p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="checkbox" id="accept_terms">
                                                <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                            </div>

                                        </div>

                                        <button class="place-order btn btn-lg btn-round" type="submit">Place order</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                        </form> 
                        
                    </div>
                </div>            
            </div>
        </div>


    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/checkout.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:03 GMT -->
</html>