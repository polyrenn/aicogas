  <?php

  session_start();


  require_once ('classes/all.php');
  $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $company = $_SESSION['CompanyName'];
    $designation = $_SESSION["designation"];
    $branch = $_SESSION['Bname'];
    $branchCode = $_SESSION['Bcode'];
    $companyCode = $_SESSION['CompanyCode'];
  $createStation = new All($connect);
  if(!isset($_SESSION['username'])){
    header('Location: portal.php');
  }
      if($designation == 'Supervisor' ){
          $color = "bg-gradient-success";
          $link = "superV.php";
      }else{
          $color = "bg-gradient-primary";
          $link = "adminPage.php";
      }
  if(isset($_POST['submit']) || isset($_POST['bcode'])){
      $code = $_POST['bcode'];
  }
      


  ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Aicogas</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>

#table{
white-space: nowrap;
position: relative;
overflow-x: scroll;
overflow-y: hidden;
-webkit-overflow-scrolling: touch;
}

</style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<?php echo "<ul class='navbar-nav ".$color." sidebar sidebar-dark accordion' id='accordionSidebar'>" ?>

<!-- Sidebar - Brand -->
<?php echo "<a class='sidebar-brand d-flex align-items-center justify-content-center' href='.$link.'> "?>
<div class="sidebar-brand-icon rotate-n-15">
</div>
<div class="sidebar-brand-text mx-3">Aicogas Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<?php echo "<a class='nav-link' href='".$link."'>
    <i class='fas fa-fw fa-tachometer-alt'></i>
    <span>Admin Home</span></a>" ?>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading"><b>Sales</b>
</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="salesanalysis.php">
            <i class="fas fa-fw fa-cog"></i>
            <span><b>Daily Sales Summary</b></span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="salesanalysis.php"><b>All Branches</b></a>
              <!-- <h6 class="collapse-header">Select Branch</h6> -->
              <!-- <a class="collapse-item" href="buttons.html">Buttons</a>
              <a class="collapse-item" href="cards.html">Cards</a> -->
            </div>
          </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="stockanalysis.php">
              <i class="fas fa-fw fa-cog"></i>
              <span><b>Daily Stock Summary</b></span>
            </a>
            <div id="colThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="stockanalysis.php"><b>All Branches</b></a>
                <!-- <h6 class="collapse-header">All Branches</h6> -->
                <!-- <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a> -->
              </div>
            </div>
          </li>
            <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="badCrbs.php">
            <i class="fas fa-fw fa-cog"></i>
            <span><b>Declined Sales</b></span>
          </a>
          <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="badCrbs.php"><b>Declined Sales</b></a>
              <!-- <h6 class="collapse-header">Select Branch</h6> -->
              <!-- <a class="collapse-item" href="buttons.html">Buttons</a>
              <a class="collapse-item" href="cards.html">Cards</a> -->
            </div>
          </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          <b>Stock</b>
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="allStock.php" data-toggle="collapse" data-target="#colfour" aria-expanded="true" aria-controls="colfour">
              <i class="fas fa-fw fa-cog"></i>
              <span><b>Manage Stock</b></span>
            </a>
            <div id="colfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="allStock.php"><b>View Stock Records</b></a>
                <a class="collapse-item" href="updateStock.php"><b>Add New Stock</b></a>
                <a class="collapse-item" href="updateS.php"><b>Update Stock</b></a>
              </div>
            </div>
          </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="switch.php">
              <i class="fas fa-fw fa-cog"></i>
              <span><b>Switch Tank</b></span>
            </a>
            <div id="colsix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"><b>Select Branch</b></h6>
                <a id="switch" class="collapse-item" href="switch.php"><b>Switch Tank In Use</b></a>
              </div>
            </div>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="addnewprice.php" data-toggle="collapse" data-target="#colseven" aria-expanded="true" aria-controls="colseven">
                <i class="fas fa-fw fa-cog"></i>
                <span><b>Price List</b> </span>
              </a>
              <div id="colseven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="addnewprice.php"><b>Add New Price / Kg</b></a>
                  <a class="collapse-item" href="updateprice.php"><b>Update Price</b></a>
                  <a class="collapse-item active" href="managePrice.php"><b>View Price By Location</b></a>
                </div>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="Loyalty.php">
                  <i class="fas fa-fw fa-cog"></i>
                  <span><b>Loyalty Gift Tool</b> </span>
                </a>
                <div id="coleight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="Loyalty.php"><b>Loyalty Watch</b></a>
                  
                  </div>
                </div>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="staffs.php">
                      <i class="fas fa-fw fa-cog"></i>
                    <span><b>Manage Accounts</b></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="fas fa-fw fa-cog"></i>
                      <span><b>LogOut</b></span></a>
                  </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
          

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <div class="d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome <?php 
                  echo  "<b class='text-primary'>".$username."</b>"; 
                  echo " | Today's Date: ";  
                  echo date('l jS F (Y-m-d)', strtotime('now')); 
                  echo " | Your Home Company: <b class='text-success'>".$company."</b>";
                  echo " | Your Branch Location:  <b class='text-success'>".$branch."</b>";
                  
                  ?></span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <div class="container-fluid align-items-center">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Select Location Below To View Stock History</h1>
      
    </div>

    <div class="container-fluid mb-4">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
      <div class="card-body">

      
                  <div class="row">

              <div class="col-lg-10 form-group">
              <script>
                        function ff() {
                            document.getElementById('pull-stock').submit();
                        }
                        </script>
              <form id="pull-stock" action=" " method="POST" >
                  
              <select onchange="ff()" class="form-control" name="bcode">
              <option>Select Branch </option>
              <?php  echo $createStation->getCompanyBranchCode();?>
              </select>
              </div>
              
             <!-- <button type="submit" name="btnsubmit" class="form-control col-lg-2 btn btn-success">View Stock Details</button> -->

              </form>

              </div>
              <div class="container-fluid">
                  <h6 class="col-lg-12 text-primary"><?php $createStation->branchCodeSelectWithNameTake($code) ?> </h6>
              </div>
<div id='table'>
              <table class='table table-striped table-dark'>
                  <thead>
                  <tr>
                  <th scope='col'>Date</th>
                  <th scope='col'>Load Number</th>
                  <th scope='col'>Total Supply</th>
                  <th scope='col'>Offload Type</th>
                  <th scope='col'>Ofloaded In</th>
                  <th scope='col'>Tank A</th>
                  <th scope='col'>Tank B</th>
                  <th scope='col'>Supply Cost</th>
                  </tr>
                  </thead>
                  <tbody>
              <?php  
              $createStation->stockHistory($code);
              
              ?>
                  </tbody>
                  </table>
                  </div>
              </div>
      

            
      </div>
      </div>

    </div>


          <!-- Begin Page Content -->
        

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Aicogas 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type='text/javascript'>


  $('#switch').click(function() {
  alert('You need to update your stock before proceeding to switch tanks. If you have done this, you can proceed, if not, please do that before coming back here. switching tanks without updating stock will result in catastrophic sales records. Many thanks.');
});
  
</script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>

  </html>
