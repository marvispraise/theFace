<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
@include("admin.includes.header");

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Product</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"> Product</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--.row-->
                <div class="row">
                    @include('admin.includes.alert');
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Product</h3>
                            <p class="text-muted m-b-30 font-13"> Upload Product</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleInputTitle">Category</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <select name="category" class="form-control" id="exampleInputTitle1">
                                                    <option value="" selected>Select a category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->unique_id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputTitle">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="exampleInputTitle1" placeholder="" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Price</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="exampleInputTitle1" placeholder="" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Discount</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="number" class="form-control" id="exampleInputTitle1" placeholder="" name="discount">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Availability</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <select name="availability" class="form-control" id="exampleInputTitle1">
                                                    <option value="" selected>Select ........</option>
                                                        <option value="1">In stock</option>
                                                        <option value="0">Not in stock</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputTitle">Featured Product</label>
                                            <div class="input-group">
                                                <input type="checkbox" name="featuredProduct" id="exampleInputTitle1" value=1>
                                                <label> Is this a Featured Product</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Best Seller</label>
                                            <div class="input-group">
                                                <input type="checkbox" name="bestSeller" id="exampleInputTitle1" value=1>
                                                <label> Is this a Best Deal</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputImage">Upload Image</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                <input type="file" class="form-control" id="exampleInputImage" name="image">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-outline btn-block">
                                            <i class="ti-upload"></i>  <span>Submit</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
            </div>
            <!-- /.container-fluid -->
        @include("admin.includes.footer");
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    @include("admin.includes.footer2");

</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
</html>
