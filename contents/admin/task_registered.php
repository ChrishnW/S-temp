<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Link here -->
  <?php include('../../include/link.php'); $page='Task Management / Task Registered'?>
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Task Registered</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">
            <?php
              $sql = mysqli_query($con,"SELECT * FROM section WHERE status=1 ORDER BY sec_name ASC"); 
              $con->next_result();
              if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql)){
                  $sec_id = $row['sec_id'];
                  $sec_name = $row['sec_name'];
                  $result = mysqli_query($con,"SELECT COUNT(id) as sec_total_tasks FROM task_list WHERE task_list.task_for='$sec_id' AND task_list.status IS TRUE");
                  $rows = $result->fetch_assoc();
                  $total_task=$rows['sec_total_tasks'];
                  echo "
                  <div class='col-xl-3 col-md-6 mb-4'>
                    <div class='card border-left-warning shadow h-100 py-2'>
                      <div class='card-body'>
                        <div class='row no-gutters align-items-center'>
                          <div class='col mr-2'>
                            <div class='text-xs font-weight-bold text-warning text-uppercase mb-1'> $sec_name </div>
                            <div class='h5 mb-0 font-weight-bold text-gray-800'>$total_task</div>
                          </div>
                          <div class='col-auto'>
                            <i class='far fa-folder fa-2x text-gray-300'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
              } 
            ?>
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
</body>

</html>