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
                            <h1>Register</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--Login Register section start-->
        <div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('users.inc.alert')
                    </div>
                        <!--Register Form Start-->
                    <div class="col-md-3"></div>

                    <div class="col-md-6">
                            <div class="customer-login-register register-pt-0">
                                <div class="form-register-title">
                                    <h2>Register</h2>
                                </div>
                                <div class="register-form">
                                    <form action="{{url('post-registration')}}" method="POST" id="regForm">
                                        {{ csrf_field() }}
                                        <div class="form-fild">
                                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                                            <label for="inputName">Name</label>

                                            @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                            @endif

                                        </div>
                                        <div class="form-fild">
                                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                                            <label for="inputEmail">Email address</label>

                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-fild">
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">
                                            <label for="inputPassword">Password</label>

                                            @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-fild">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>

                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                                        <div class="text-center">If you have an account?
                                            <a class="small" href="{{url('userLogin')}}">Sign In</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Register Form End-->
                    <div class="col-md-3"></div>

                </div>
            </div>
        </div>
        <!--Login Register section end-->
        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


</html>