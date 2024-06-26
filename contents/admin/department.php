<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('../../include/link.php');
  $page = 'User Management \ Department' ?>
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
          <h1 class="h3 mb-2 text-gray-800">Department</h1>
          <p class="mb-4">Put something here.</p>

          <!-- DataTales Example -->
          <div class="card border-primary shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
              <h6 class="m-0 font-weight-bold text-white">Registered Departments</h6>
                <div class="dropdown no-arrow">
                  <span class="text-white" data-toggle="modal" data-target="#accountCreateModal">
                    <i class="fas fa-plus fa-sm fa-fw text-gray-400"></i> Register New Department
                  </span>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="table-success">
                      <th>Action</th>
                      <th>Department Code</th>
                      <th>Department Name</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="table-success">
                      <th>Action</th>
                      <th>Department Code</th>
                      <th>Department Name</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $con->next_result();
                      $result = mysqli_query($con,"SELECT * FROM department");               
                      if (mysqli_num_rows($result)>0) { 
                        while ($row = $result->fetch_assoc()) {
                          if ($row['status'] == 1){
                            $label = "<button type='button' class='btn btn-success'>Active</button>";
                          }
                          else if ($row['status'] == 0){
                            $label = "<button type='button' class='btn btn-danger'>Deactive</button>";
                          }
                          echo "<tr>    
                            <td> <center /><a href='department_edit.php?dep_id=".$row['id']."' <button class='btn btn-primary' ><i class='fa fa-edit fa-1x'></i> Edit</button></a> </td> 
                            <td>" . $row["dept_id"] . "</td> 
                            <td>" . $row["dept_name"] . "</td> 
                            <td><center/>" . $label . "</td>
                          </tr>";
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

  <!-- Scripts here -->
  <?php include('../../include/script.php'); ?>
  <!-- Scripts end -->

</body>

</html>