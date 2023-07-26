<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();

?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-account"></i></h1>
                        <h6 class="text-white">All Patient: <?php echo $crud->countAll('patient');  ?></h6>
                    </div>
                </div>
            </div>
           
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                         <h6 class="text-white">All Doctor: <?php echo $crud->countAll('doctor');  ?></h6>
                    </div>
                </div>
            </div>

             <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-primary text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">All Specialization: <?php echo $crud->countAll('specialization');  ?></h6>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">All Treatment Type: <?php echo $crud->countAll('treatment');  ?></h6>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">All Treatment History: <?php echo $crud->countAll('treatment_history');  ?></h6>
                    </div>
                </div>
            </div>


            
            <div class="card col-md-12">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
        </div>
        <!-- ============================================================== -->
       
   
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php
include 'inc/footer.php';
?>

</body>

</html>