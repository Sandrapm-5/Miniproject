<?php

require 'travelcon.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>view</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="css/styleview.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body id="page-top">
  <div id="wrapper">
   
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">package</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <center>
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  
                </div>
                <div class="table-responsive p-3">
                  <table border="4">
                   <thead class="thead-light">
                      <tr>
                       
                       <th>package name</th>
                       <th>discription</th>
                       <th>price</th>
                    <th>package image</th>

                      </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM package_tb";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0) 
                        {
                            foreach($query_run as $package1)
                            {
                               
                                ?>
                                <tr>
                                  <td><?=$package1['package_name'];?></td>
                                   <td><?=$package1['discription'];?></td>
                                  <td><?=$package1['price'];?></td>
                                   
                                    <td>
                                        <a href="#>" class="btn btn-success btn-sm">Disable</a> 
                                        
                                    </td>
                                    </tr>
                                <?php


                            }

                        }    
                        else
                        {
                           echo "<h5> No Record Found </h5>";
                        }   
                        
                        ?>

                    
                     
                  </table></center>
                </div>
              </div>
            </div>
          </div>
         

      
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</center>
  </form>
</body>

</html>

