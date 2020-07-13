  <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                    <div class="row align-items-center">

                        <div class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i>(08) 123 456 7890</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>yourmail@domain.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                            <!--Socail start-->
                            <div class="header-top-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                            <!--Socail end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li><a href="#"><i class="fa fa-user-circle-o"></i>Account</a>
                                        <ul class="ht-dropdown right">
                                            @if(auth()->user())
                                            <li><a href="{{url('/viewOrder')}}">Orders</a></li>
                                            <li><a href="{{url('/userLogout')}}">Sign Out</a></li>
                                            @else
                                                <li><a href="{{url('/userLogin')}}">Sign In</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            @foreach($hCategories as $category)
                                            <li><a href="{{url('/shop/'.$category->id)}}">{{$category->category_name}}</a></li>
                                                <hr>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/blogView')}}">Blog</a>
                                    </li>
                                    <li><a href="{{url('/viewCart')}}">Cart</a></li>
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form method="get" action="{{url('/search')}}">
                                        @csrf
                                        <input type="text" placeholder="Search Products" name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="{{url('/viewCart')}}"><i class="fa fa-shopping-cart"></i><span>{{$cartCount}}</span></a>
                                <!--Mini Cart Dropdown Start-->
                                <div class="header-cart-dropdown">
                                    <ul class="cart-items">
                                        @if(!empty($cart_items))
                                            @foreach($cart_items as $item)
                                        <li class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="{{url('/viewCart')}}"><img src="/images/{{$item->image}}" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="{{ route('productDetails', ['id' => $item->id]) }}">{{$item->name}}</a></h5>
                                                <span class="product-quantity">{{$item->quantity}} ×</span>
                                                <span class="product-price">${{$item->price}}</span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="{{url('/deleteItem/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="cart-total">
                                        <h5>Subtotal :<span class="float-right">${{$total_price}}</span></h5>
                                        <h5>Total : <span class="float-right">${{$total_price}}</span></h5>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="{{url('/viewCart')}}">View Cart</a>
                                        <a href="{{url('/getCheckout')}}">checkout</a>
                                    </div>
                                </div>
                                <!--Mini Cart Dropdown End-->
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>