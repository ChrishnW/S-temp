<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('../../include/link.php');
  $page = 'Task Management / Task Assignment' ?>
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
          <h1 class="h3 mb-2 text-gray-800">Task Assignment</h1>
          <p class="mb-4">Put something here.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Employee List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="table-success">
                      <th>Username ID</th>
                      <th>Employee</th>
                      <th>Section</th>
                      <th>Department</th>
                      <th>List of Tasks</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="table-success">
                      <th>Username ID</th>
                      <th>Employee</th>
                      <th>Section</th>
                      <th>Department</th>
                      <th>List of Tasks</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $con->next_result();
                      $result = mysqli_query($con,"SELECT * FROM accounts JOIN section ON accounts.sec_id=section.sec_id JOIN department ON department.dept_id=section.dept_id WHERE accounts.status='1' AND accounts.access='2'");              
                      if (mysqli_num_rows($result)>0) {
                        while ($row = $result->fetch_assoc()) {
                        $username=$row["username"];
                        $emp_name=$row['fname'].' '.$row['lname'];
                        $section=$row["sec_name"];
                        $department=$row['dept_name'];
                        $count_task = mysqli_query($con,"SELECT COUNT(id) as total_task FROM tasks WHERE in_charge='$username'");
                        $count_task_row = $count_task->fetch_assoc();
                        $total_task=$count_task_row['total_task'];
                        echo "
                          <tr>
                            <td>".$username."</td>
                            <td>".$emp_name."</td>
                            <td>".$section."</td>
                            <td>".$department."</td>
                            <td><center /><a href='#' class='btn btn-primary btn-icon-split'><span class='text'>View</span><span class='icon text-white-50'> <i>$total_task</i></span></a></td>
                          </tr>
                        ";
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts here -->
  <?php include('../../include/script.php'); ?>
  <!-- Scripts end -->

</body>

</html>