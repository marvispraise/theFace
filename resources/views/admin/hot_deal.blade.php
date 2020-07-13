<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
@include("admin.includes.header");

<body class="fix-sidebar">
    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hot Deal Products</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Hot Deal Products</li>
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
                            <h3 class="box-title m-b-0">Hot Deal Products</h3>
                            <p class="text-muted m-b-30 font-13"> Hot Deal Products</p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="{{ route('saveHotDeal') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{--<h5 class="m-t-20">Product</h5>--}}
                                            <label for="exampleInputImage">Product</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="product"  placeholder="Search Product">
                                                <input type="hidden" class="form-control" id="product_id" name="product" placeholder="Search Product">

                                            </div>
                                        <div id="white-box"></div>


                                        <div class="form-group">
                                            <label for="exampleInputImage">Start Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control complex-colorpicker" id="datepicker" name="start_date" placeholder="mm/dd/yy" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-text"></i></div>
                                                <input type="text" class="form-control" id="datepicker" name="end_date" placeholder="mm/dd/yy" autocomplete="off">
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
        @include("admin.includes.footer");
        </div>
    </div>

    @include("admin.includes.footer2");
    <script>
        jQuery(document).ready(function() {
            $(".select2").select2();
            $('.selectpicker').selectpicker();

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#product').on('keyup',function() {
                var query = $(this).val();
                $.ajax({

                    url:"{{ route('searchP') }}",

                    type:"GET",

                    data:{'product':query},

                    success:function (data) {

                        $('#white-box').html(data);
                    }
                })
                // end of ajax call
            });


            $(document).on('click', 'li', function(){

                var value = $(this).text();
                var product_id = $(this).attr("product_id");
                $('#product').val(value);
                $('#product_id').val(product_id);
                $('#white-box').html("");
            });
        });
    </script>

</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/upload.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:01:03 GMT -->
</html>
