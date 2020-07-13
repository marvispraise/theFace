<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/blog-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:05 GMT -->
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
                            <h1>Blog Post</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Blog Post</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Blog Section Start -->
        <div class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                   <!-- Single Blog Start -->
                   <div class="blog col-lg-6 col-md-6 col-sm-6">
                        <div class="blog-inner mb-20">
                            <div class="media"><a href="{{url('blog_details/'.$blog->id)}}" class="image"><img src="/images/{{$blog->img}}" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="#">{{$blog->title}}</a></h3>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i><span class="date-time"><span class="date">{{$blog->created_at->diffForHumans()}}</span></span></li>
                                </ul>
                                <p>{{\Illuminate\Support\Str::limit($blog->content, 100, '........')}} </p>
                                <a class="readmore" href="{{url('blog_details/'.$blog->id)}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    @endforeach
                </div>
                <div class="row mb-35">
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
        <!-- Blog Section End -->

        <!--Footer section start-->
    @include('users.inc.footer')
        <!--Footer section end-->

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    @include('users.inc.scripts')


</body>


<!-- Mirrored from demo.hasthemes.com/theface-preview/theface-v3/blog-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 15:41:05 GMT -->
</html>