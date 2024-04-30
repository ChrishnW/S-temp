<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('../../include/link.php');
  $page = 'User Management \ Account Edit' ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('../../include/sidebar_admin.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('../../include/header_admin.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="card shadow mb-4 border-primary">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">Department Edit</h6>
            </div>
            <div class="card-body bg-gradient-light">
              <form class="needs-validation" action="../../include/process.php" method="POST" novalidate>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Department Code:</label>
                      <input type="hidden" placeholder="Enter Code" class="form-control" name="department_id" id="department_id" value="<?php echo $department_id?>" required>
                      <input type="text" placeholder="Enter Code" class="form-control" name="department_code" id="department_code" value="<?php echo $department_code?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Department Name:</label>
                      <input type="text" placeholder="Enter Name" class="form-control" name="department_name" id="department_name" value="<?php echo $department_name?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Status:</label>
                      <select class="form-control custom-select" name="department_status" id="department_status">
                        <?php if ($department_status == 1) {?>
                        <option value='1' selected>ACTIVE [Current]</option>
                        <option value='0'>DEACTIVE</option>
                        <?php } elseif ($department_status == 0) { ?>
                        <option value='1'>ACTIVE</option>
                        <option value='0' selected>DEACTIVE [Current]</option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" onclick="history.back()"><i class="fas fa-times-circle fa-fw"></i> Cancel</button>
                  <button id="submit" type="submit" class="btn btn-success"><i class="fas fa-check fa-fw"></i> Submit</button>
                </div>
              </form>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Scripts here -->
  <?php include('../../include/script.php'); ?>
  <!-- Scripts end -->

</body>

</html>