
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

$dy=$crud->displayOneSpecific('doctor','id',$_GET['id']);

?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DOCTOR DETAILS</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Doctor Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                 

                    <form class="col-12" action="add-doctor" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="name" value="<?=$dy['name']?>" readonly>
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Email Address" name="email" aria-describedby="basic-addon1" value="<?=$dy['email']?>" readonly>
                                </div>
                                   <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1" value="<?=$dy['password']?>" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-mobile"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Phone Number" aria-label="Phone Number" name="phone" aria-describedby="basic-addon1" value="<?=$dy['phone']?>" readonly>
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon1"><i class="ti-location-arrow"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Residential Address" aria-label="Address" name="address" aria-describedby="basic-addon1" value="<?=$dy['address']?>" readonly>
                                </div>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon1"><i class="ti-location-arrow"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Residential Address" aria-label="Gender" name="gender" aria-describedby="basic-addon1" value="<?=$dy['gender']?>" readonly>
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon1"><i class="ti-location-arrow"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Specialization" aria-label="Specialization" name="address" aria-describedby="basic-addon1" value="<?=$crud->displayNameById('specialization',$dy['specialization'])?>" readonly>
                                </div>
                                  <div class="input-group mb-3"><label>Image</label><br/>
                                    <img src="../doctor_images/<?=$dy['image'];?>" height="300" width="300">
                                </div>


                                
                             
                                
                            </div>
                      
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <a href="view-doctor.php" class="btn btn-info" class="col-6"><i class="fa fa-arrow-left m-r-5"></i> Back to view Doctor</a>
                                    </div>
                                </div>
                            </div>
                     

                    </form>
                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>