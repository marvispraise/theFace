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
                            <h1>About</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>About</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!--About Us Area Start-->
        <div class="about-us-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!--About Us Image Start-->
                        <div class="about-us-img-wrapper mb-30 mb-xs-15">
                            <div class="about-us-image img-full">
                                <a href="#"><img src="assets/images/about/about-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--About Us Image End-->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!--About Us Content Start-->
                        <div class="about-us-content">
                            <h2>Our company</h2>
                            <p class="mb-20">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                            <p class="mb-20">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo volup.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                        <!--About Us Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Area End-->

        <!--About Us Team Start-->
        <div class="about-us-team-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center mb-40 mb-xs-20">
                            <h2>our <span>exclusive</span> team</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="assets/images/team/team-1.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Marcos Alonso</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="assets/images/team/team-2.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Isaac Newton</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--Single Team Start-->
                        <div class="single-team mb-30">
                            <div class="team-image img-full">
                                <a href="#"><img src="assets/images/team/team-3.jpg" alt=""></a>
                            </div>
                            <div class="team-content">
                                <div class="team-hover-info">
                                    <h2><a href="#">Charlotte Taylor</a></h2>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Team End-->
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Team End-->
        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->


    </div>


    <!-- All jquery file included here -->
    @include('users.inc.scripts')

</body>


</html>