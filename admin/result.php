       <?php 
       ob_start();
       require_once 'library/lib.php';
       require_once 'classes/crud.php';

       $lib=new Lib;
       $crud=new Crud;

       ?>

       <?php include 'patient/inc/header2.php'; ?>
       <!-- ============================================================== -->
       <!-- End Left Sidebar - style you can find in sidebar.scss  -->
       <!-- ============================================================== -->
       <!-- ============================================================== -->
       <!-- Page wrapper  -->
       <!-- ============================================================== -->
       <div class="">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">ALL TREATMENT HISTORY</h4>
              <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Treatment History</li>
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
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php $lib->msg();?></h5>
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Patient Name</th>
                            <th>Patient File No</th>
                            <th>Treatment Request</th>
                             <th>Treatment Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <?php
                      $qt=$crud->displayAllSpecificWithOrder('treatment','file_no',$_GET['id'],'id','desc');

                      $c=1;
                      if ($qt) {

                       foreach($qt as $dy){
                        ?>
                        <tr>
                         <td><?php echo $c++; ?></td>
                         <td><?php echo strtoupper($crud->displayNameById('patient',$dy['patient_id'])); ?></td>
                         <td><?php echo $dy['file_no'] ?></td>
                         <td><?php echo $dy['complain'] ?></td>
                         <td><?php 
                         if ($dy['status'] == 0) {
                          echo "Waiting for Treatment"; 
                         } elseif ($dy['status'] == 1) {
                          echo "Undergoing Treatment"; 
                         } elseif ($dy['status'] == 2) {
                           echo "Treated";
                         }else{
                          echo "Not Responding to Treatment"; 
                         }
                         
                         
                         ?></td>
                         <td><?php echo $dy['date']; ?></td>
                        </tr>
                        <?php
                      }

                    } else {
                      echo "<tr><td colspan='6'><center>No Treatment History at the moment</center</td></tr>";
                    }
                    ?>


                  </tbody>
                  <tfoot>
                    <tr>
                       <th>S/N</th>
                          <th>Patient Name</th>
                            <th>Patient File No</th>
                            <th>Treatment Request</th>
                             <th>Treatment Status</th>
                          <th>Date</th>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include 'patient/inc/footer2.php'; ?>
    <script>
          /****************************************
           *       Basic Table                   *
           ****************************************/
           $('#zero_config').DataTable();
         </script>

       </body>

       </html>