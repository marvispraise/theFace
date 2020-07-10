<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/login.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:40:52 GMT -->
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
                            <h1>Login</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Login</li>
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
                <!--Login Form Start-->
                    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="customer-login-register">
                                <div class="form-login-title">
                                    <h2>Login</h2>
                                </div>
                                <div class="login-form">
                                    <form action="{{url('post-login')}}" method="POST" id="logForm">

                                        {{ csrf_field() }}

                                        <div class="form-fild">
                                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                                            <label for="inputEmail">Email address</label>

                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-fild">
                                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                                            <label for="inputPassword">Password</label>

                                            @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                                        <div class="text-center">If you have an account?
                                            <a class="small" href="{{url('userRegister')}}">Sign Up</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Login Form End-->
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


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/login.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:40:52 GMT -->
</html>