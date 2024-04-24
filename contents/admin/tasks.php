<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('../../include/link.php');
  $page = 'Tasks' ?>
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
          <h1 class="h3 mb-2 text-gray-800">Tasks</h1>
          <p class="mb-4">Put something here.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Tasks</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="table-success">
                      <th>Task Code</th>
                      <th>Legend</th>
                      <th>Task Name</th>
                      <th>Classification</th>
                      <th>Due Date</th>
                      <th>Assignee</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="table-success">
                      <th>Task Code</th>
                      <th>Legend</th>
                      <th>Task Name</th>
                      <th>Classification</th>
                      <th>Due Date</th>
                      <th>Assignee</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      if (isset($_GET['status'])){
                        $con->next_result();
                        $status = $_GET['status'];
                        $result = mysqli_query($con,"SELECT *, (tasks_details.status) FROM tasks_details JOIN accounts ON accounts.username=tasks_details.in_charge JOIN task_class ON tasks_details.task_class=task_class.id WHERE tasks_details.task_status=1 AND tasks_details.status='$status'");
                        if (mysqli_num_rows($result)>0) { 
                          while ($row = $result->fetch_assoc()) {
                            if ($row['status'] == 'NOT YET STARTED'){
                              $label = 'danger';
                            }
                            elseif ($row['status'] == 'IN PROGRESS'){
                              $label = 'warning';
                            }
                            elseif ($row['status'] == 'FINISHED'){
                              $label = 'success';
                            }
                            echo "
                            <tr>
                              <td>".$row['task_code']."</td>
                              <td>".$row['requirement_status']."</td>
                              <td>".$row['task_name']."</td>
                              <td>".$row['task_class']."</td>
                              <td>".date('d-m-Y h:i A', strtotime($row['due_date'].'16:00:00'))."</td>
                              <td>".$row['in_charge']."</td>
                              <td><span class='btn btn-$label btn-icon-split'><span class='text'>".$row['status']."</span></span></td>
                            </tr>";
                          }
                        }
                      }
                      else {
                        $con->next_result();
                        $result = mysqli_query($con,"SELECT *, (tasks_details.status) FROM tasks_details JOIN accounts ON accounts.username=tasks_details.in_charge JOIN task_class ON tasks_details.task_class=task_class.id WHERE tasks_details.task_status=1");
                        if (mysqli_num_rows($result)>0) { 
                          while ($row = $result->fetch_assoc()) {
                            if ($row['status'] == 'NOT YET STARTED'){
                              $label = 'danger';
                            }
                            elseif ($row['status'] == 'IN PROGRESS'){
                              $label = 'warning';
                            }
                            elseif ($row['status'] == 'FINISHED'){
                              $label = 'success';
                            }
                            echo "
                            <tr>
                              <td>".$row['task_code']."</td>
                              <td>".$row['requirement_status']."</td>
                              <td>".$row['task_name']."</td>
                              <td>".$row['task_class']."</td>
                              <td>".date('d-m-Y h:i A', strtotime($row['due_date'].'16:00:00'))."</td>
                              <td>".$row['in_charge']."</td>
                              <td><span class='btn btn-$label btn-icon-split'><span class='text'>".$row['status']."</span></span></td>
                            </tr>";
                          }
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